@extends('layouts.app', ['page' => __('findleads'), 'pageSlug' => 'findleads'])


<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

<script type="text/javascript" src="https://media.twiliocdn.com/sdk/js/client/v1.9/twilio.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    var device;
    var contactID = 0;

    $.getJSON('https://mantis-starling-8195.twil.io/capability-token')
    .then(function (data) {
      console.log('Token: ' + data.token);

      // Setup Twilio.Device
      device = new Twilio.Device(data.token, {
        // Set Opus as our preferred codec. Opus generally performs better, requiring less bandwidth and
        // providing better audio quality in restrained network conditions. Opus will be default in 2.0.
        codecPreferences: ['opus', 'pcmu'],
        // Use fake DTMF tones client-side. Real tones are still sent to the other end of the call,
        // but the client-side DTMF tones are fake. This prevents the local mic capturing the DTMF tone
        // a second time and sending the tone twice. This will be default in 2.0.
        fakeLocalDTMF: true,
        // Use `enableRingingState` to enable the device to emit the `ringing`
        // state. The TwiML backend also needs to have the attribute
        // `answerOnBridge` also set to true in the `Dial` verb. This option
        // changes the behavior of the SDK to consider a call `ringing` starting
        // from the connection to the TwiML backend to when the recipient of
        // the `Dial` verb answers.
        enableRingingState: true,
      });

      device.on('ready',function (device) {
        // document.getElementById('call-controls').style.display = 'block';
      });

      device.on('error', function (error) {
        console.log(error);
      });

      device.on('connect', function (conn) {
        
        markContact();
        // document.getElementById('button-call').style.display = 'none';
      });

      device.on('disconnect', function (conn) {
        // document.getElementById('button-call').style.display = 'inline';
      });

      $('#contactBiz').click(function() {
        var params = {
          //To: '+639778043893'
          To: '+639359186078'
        };

        console.log('Calling ' + params.To + '...');
        if (device) {
          var outgoingConnection = device.connect(params);
          outgoingConnection.on('ringing', function() {
            //log('Ringing...');
          });
        }
      });

      $('#hangup').click(function() {
        device.disconnectAll();
      });
    })
    .catch(function (err) {
      console.log(err);
    });

    // $('#ContactPopUp'). on('show. bs. modal', function() {
      
    // }

    

    // $('.place-id').each(function(i) {
    //     let place_id = $(this).attr('data');
    //     $.ajax({
    //         type: 'GET',
    //         url: 'contact/' + place_id,
    //         timeout: 5000,
    //         success: (data, textStatus ) => {
    //             let jsonData = JSON.parse(data);
    //             $(this).html(jsonData['contact']);
    //         },
    //         error: (xhr, textStatus, errorThrown) => {
    //             $(this).html('none');
    //         }
    //     });
    // });

    getContactNumbers();

    $('#inlineFormInputGroup').keyup(function(e) {
      if (e.keyCode == 13) {
        location.href = '/findleads/' + $(this).val();
      }
    });
    $('.btn-save').click(function() {
      let p = $(this).parent();
      $.ajax({
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/save',
        data: {
            name: $('input[name="name"]', p).val(),
            address: $('input[name="address"]', p).val(),
            contact: $('input[name="contact"]', p).val(),
            photo: $('input[name="photo"]', p).val()
        },
        success: (data, textStatus ) => {
            console.log(data);
        },
        error: (xhr, textStatus, errorThrown) => {
            // alert error
            alert('Transaction failed.');
            console.log(textStatus);  
            console.log(xhr.responseText);
        }
      });

      
    });

    $('.btnContactModal').click(function() {
      //alert('test');
      let p = $(this).parent();
      let name = $('input[name="name"]', p).val();
      contactID = name;

      $('#ContactPopUp').modal('show');
      console.log(contactID);
    });

    function markContact() {
      
      $.ajax({
        type: 'get',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/contacted/' + contactID,
        success: (data, textStatus ) => {
            //location.href = "";
        },
        error: (xhr, textStatus, errorThrown) => {
            // alert error
            alert('Transaction failed.');
            console.log(textStatus);
            console.log(xhr.responseText);
        }
      });
    }

    function getContactNumbers() {
      $('.place-id').each(function(i) {
        let place_id = $(this).attr('data');
        $.ajax({
            type: 'GET',
            url: '/contact/' + place_id,
            timeout: 5000,
            success: (data, textStatus ) => {
                let jsonData = JSON.parse(data);
                $(this).html(jsonData['contact']);
            },
            error: (xhr, textStatus, errorThrown) => {
                $(this).html('none');
            }
        });
      });
    }
  });
</script>

@section('content')
<div class="row">
  @foreach ($data as $item)
  <div class="col-md-6">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Find Leads</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <h4>
            <strong> Business name:</strong> {{ $item['name'] }} <br />
            <strong> Contact #:</strong> <span class="place-id" data="{{ $item['contact'] }}">...</span><br />
            <strong> Address:</strong> {{ $item['address'] }} <br />
            <strong> View Image:</strong> 
              <a href="{{ $item['photo'] }}" target="_blank">Click Me!</a> 
          </h4>
          <input type="hidden" name="name" value="{{ $item['name'] }}" />
          <input type="hidden" name="address" value="{{ $item['address'] }}" />
          <input type="hidden" name="contact" value="{{ $item['contact'] }}" />
          <input type="hidden" name="photo" value="{{ $item['photo'] }}" />
          <button type="submit" class="btn btn-fill btn-success btn-save">Add To List</button>
          <button type="button" class="btn btn-fill btn-success btnContactModal">Contact</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>


<div class="modal fade" id="ContactPopUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Make a Call</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
         <button type="submit" class="btn btn-success" id="contactBiz"><i class="fas fa-phone"></i></button>
        <!-- <button type="submit" class="btn btn-success" id="biSave" data-toggle="modal" data-target="#Message"><i class="fas fa-envelope"></i></button> -->
        <button type="button" rel="tooltip" title="Remove" id="hangup" class="btn btn-danger btn-simple btn-xs">
            <i class="fa fa-times"></i>
        </button>
      </div>
    </div>
  </div>
</div>

    
<div class="modal fade" id="Message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
         <div class="form-group">
    <input type="number" class="form-control" id="MessageNumber" placeholder="Input number" disabled>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Input Message"></textarea>
  </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send <i class="far fa-paper-plane"></i></button>
      </div>
    </div>
  </div>
</div>


    <!-- Contact end -->
  @endsection 