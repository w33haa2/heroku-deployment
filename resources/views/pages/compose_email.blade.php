@extends('layouts.app', ['page' => __('Compose Email'), 'pageSlug' => 'compose_email'])



<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#emailCampaignList').change(function() {
      let id = $(this).val();

      $.ajax({
        type: 'GET',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/email-campaign/' + id,
        success: (data, textStatus ) => {
            data = data.data;
            $('#subject').val(data.subject);
            $('#message').val(data.message);
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
    <div class="col-8">
        <div class="card ">
            <div class="card-header">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif


                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    <div class="table-responsive">
                    <form method = "POST" action="email">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="emailCampaignList">
                            <option value="0">Select Campaign</option>
                            @foreach($data as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlInput1">Subject</label>
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                        
                        <label for="exampleFormControlInput1">To:</label>
                        <input type="email" name="emailTo" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea name="message" class="form-control" id="message" rows="3"> </textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="submit" class="btn btn-danger"> Clear</button>
                    
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection 