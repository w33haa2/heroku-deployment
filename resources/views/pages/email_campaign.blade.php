@extends('layouts.app', ['page' => __('Email Campaign'), 'pageSlug' => 'email_campaign'])


<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#saveCampaign').click(function() {
      $.ajax({
        type: 'PUT',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/email-campaign/save',
        data: {
            id: $('#campaignID').val(),
            name: $('#campaignName').val(),
            subject: $('#campaignSubject').val(),
            message: $('#campaignMessage').val()
        },
        success: (data, textStatus ) => {
          location.href = "";
        },
        error: (xhr, textStatus, errorThrown) => {
            // alert error
            alert('Transaction failed.');
            console.log(textStatus);
            console.log(xhr.responseText);
        }
      });
    });

    $('#addCampaign').click(function() {
      $.ajax({
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/email-campaign/save',
        data: {
            name: $('#inputNewCampaign').val()
        },
        success: (data, textStatus ) => {
            location.href = "";
        },
        error: (xhr, textStatus, errorThrown) => {
            // alert error
            alert('Transaction failed.');
            console.log(textStatus);
            console.log(xhr.responseText);
        }
      });
    });

    $('.edit-campaign').click(function() {
      let p = $(this).parent();
      let id = $('input[name="id"]', p).val();
      let name = $('input[name="name"]', p).val();
      let subject = $('input[name="subject"]', p).val();
      let message = $('input[name="message"]', p).val();
      
      $('#campaignID').val(id);
      $('#campaignName').val(name);
      $('#campaignSubject').val(subject);
      $('#campaignMessage').val(message);
    });

    $('.delete-campaign').click(function() {
      let p = $(this).parent();
      let id = $('input[name="id"]', p).val();

      $.ajax({
        type: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/email-campaign/' + id,
        success: (data, textStatus ) => {
            location.href = "";
        },
        error: (xhr, textStatus, errorThrown) => {
            // alert error
            alert('Transaction failed.');
            console.log(textStatus);
            console.log(xhr.responseText);
        }
      });
    });


    
  });
</script>

@section('content')
<div class="row">
  
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
    <button type="submit" class="btn btn-fill btn-primary"  data-toggle="modal" data-target="#AddEmail">Add</button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th class="">
                  Campaign Name
                </th>
                <th colspan="4"></th>

                
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr>
                <td class="" colspan="5">
                  {{ $item['name'] }}
                </td>
                
                <td class="text-center"> 
                  <input type="hidden" name="id" value="{{ $item['id'] }}" />
                  <input type="hidden" name="name" value="{{ $item['name'] }}" />
                  <input type="hidden" name="subject" value="{{ $item['subject'] }}" />
                  <input type="hidden" name="message" value="{{ $item['message'] }}" />
                  <button type="submit" class="btn btn-fill btn-success edit-campaign" data-target="#EmailTemplate" data-toggle="modal" data-target="#EmailTemplate"><i class="tim-icons icon-pencil"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-warning delete-campaign"><i class="tim-icons icon-trash-simple"></i></button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  

    <!-- Contact -->
    <div class="modal fade" id="ContactPopUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
          Are you sure you want to submit? 
        </center>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="biSave">Yes <i class="fal fa-file-check"></i></button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No <i class="far fa-file-times"></i></button>
      </div>
    </div>
  </div>
</div>
    <!-- Contact end -->

  <!-- ADD EMAIL CAMPAIGN MODAL -->
  <div class="modal fade" id="AddEmail" tabindex="-1" role="dialog" aria-labelledby="AddEmail" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Campaign Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="">
        {{ csrf_field() }}
        <div class="col-sm-5">
          <div class="form-group">
              <input type="text" value="" id="inputNewCampaign" placeholder="Input Campaign" class="form-control" />
          </div>
        </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" id="addCampaign">Add</button>
          <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#Close">Clear</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- EMAIL CONTENT TEMPLATE MODAL -->
<div class="modal fade" id="EmailTemplate" tabindex="-1" role="dialog" aria-labelledby="EmailContent" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Email Template</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
              <input type="hidden" class="form-control" id="campaignID">
              <input type="text" class="form-control" id="campaignName" placeholder="Campaign Name">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput2">Subject</label>
              <input type="text" class="form-control" id="campaignSubject" placeholder="Campaign Subject">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea class="form-control" id="campaignMessage" rows="3"></textarea>
            </div>
          </form>

      </div>
      <div class="modal-footer">
         <button class="btn btn-success" id="saveCampaign">Submit</button>
        <button class="btn btn-danger" id="biClear" data-toggle="modal" data-target="#Close">Clear</button>
      </div>
    </div>
  </div>
</div>
  @endsection 