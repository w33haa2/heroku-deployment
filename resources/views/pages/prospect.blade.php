@extends('layouts.app', ['page' => __('prospects'), 'pageSlug' => 'prospects'])


@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> BizScout Leads</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th class="text-center">
                  Busine Name
                </th>
                <th class="text-center">
                  Status
                </th>
                <th class="text-center">
                Prospect Details
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $place)
              <tr>
                <td class="text-center">
                  {{ $place['name'] }}
                </td>
                <td class="text-center">
                  @if ($place['status'] == 0)
                  <button type="submit" class="btn btn-success btn-lg ">
                  @else
                  <button type="submit" class="btn btn-secondary btn-lg  disabled">
                  @endif
                  Contacted</button>
                </td>
                <td class="text-center">
                  <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task" data-toggle="modal" data-target="#ViewDetails">
                    View
                      <i class="tim-icons icon-zoom-split"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-danger" data-toggle="modal" data-target="#Edit"><i class="tim-icons icon-settings-gear-63"></i></button>
                </td>
              </tr>
              @endforeach
              <!-- <tr>
                <td class="text-center">
                  Minerva Hooper
                </td>
                <td class="text-center">
                 <button type="submit" class="btn btn-fill btn-success">Contact</button>
                </td>
                <td class="text-center">
                  <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                    Check Status
                      <i class="tim-icons icon-pencil"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success">EDIT</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  Sage Rodriguez
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-warning">Contacted</button>
                </td>
                <td class="text-center">
                 <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                    Check Status
                      <i class="tim-icons icon-pencil"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success">EDIT</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  Philip Chaney
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-warning">Contacted</button>
                </td>
                <td class="text-center">
                  <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                    Check Status
                      <i class="tim-icons icon-pencil"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-warning">DELETE</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  Doris Greene
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-warning">Contacted</button>
                </td>
                <td class="text-center">
                  <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                    Check Status
                      <i class="tim-icons icon-pencil"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success">EDIT</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  Mason Porter
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success">Contact</button>
                </td>
                <td class="text-center">
                  <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                    Check Status
                      <i class="tim-icons icon-pencil"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success">EDIT</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  Jon Porter
                </td>
                <td class="text-center">
                 <button type="submit" class="btn btn-fill btn-warning">Contacted</button>
                </td>
                <td class="text-center">
                  <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                    Check Status
                      <i class="tim-icons icon-pencil"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success">EDIT</button>
                </td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<!-- VIEW DETAILS MODAL -->
  <div class="modal fade" id="ViewDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Business Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
         <button type="submit" class="btn btn-success" id="biSave"><i class="fas fa-phone"></i></button>
        <button  type="button" class="btn btn-btn-link"  data-toggle="modal" data-target="#EmailContent" data-toggle="modal" data-target="#EmailContent"><i class="fas fa-envelope"></i></button>
        <!-- <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task" data-toggle="modal" data-target="#EmailContent">test </button>
       -->
      </div>
    </div>
  </div>
</div>

<!-- Settings MODAL -->
<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="Edit" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <button type="button" class="btn btn-default">Contacted</button>
      <button type="button" class="btn btn-danger">Cannot be reached</button>
      </div>
      <div class="modal-footer">
         <!-- <button type="submit" class="btn btn-success" id="biSave"><i class="fas fa-phone"></i></button>
        <button  type="button" class="btn btn-btn-link"  data-toggle="modal" data-target="#EmailContent" data-toggle="modal" data-target="#EmailContent"><i class="fas fa-envelope"></i></button>
         -->
        <!-- <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task" data-toggle="modal" data-target="#EmailContent">test </button>
       -->
      </div>
    </div>
  </div>
</div>

<!-- EMAIL CONTENT MODAL -->
<div class="modal fade" id="EmailContent" tabindex="-1" role="dialog" aria-labelledby="EmailContent" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Content</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Example select</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Select Campaign</option>
                <option>Campaign 1</option>
                <option>Campaign 2</option>
                <option>Campaign 3</option>
                <option>Campaign 4</option>
                <option>Campaign 5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </form>

      </div>
      <div class="modal-footer">
         <button type="submit" class="btn btn-success" id="biSave"><i class="fas icon-simple-add">Submit</i></button>
        <button type="submit" class="btn btn-danger" id="biSave" data-toggle="modal" data-target="#Close"><i class="icon-simple-remove"></i>Clear</button>
      </div>
    </div>
  </div>
</div>
  @endsection