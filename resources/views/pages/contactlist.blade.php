@extends('layouts.app', ['page' => __('contact list'), 'pageSlug' => 'contactlist'])


@section('content')
<div class="row">
  
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
    <button type="submit" class="btn btn-fill btn-success"  data-toggle="modal" data-target="#AddEmail">Add</button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
              <tr>
                <th class="">
                  Email List 
                </th>
                <th colspan="4"></th>
              </tr>
            </thead>
          <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>StarBucks</td>
                    <td>test@email.com</td>
             
                    <td class="td-actions text-right">
                        <!-- <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-user"></i>
                        </button> -->
                        <button type="button" rel="tooltip" class="btn btn-success btn-simple btn-xs"  data-placement="top" title="Edit">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger btn-simple btn-xs" data-placement="top" title="Archive" >
                            <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>StarBucks</td>
                    <td>test@email.com</td>
                   
                    <td class="td-actions text-right">
                        <!-- <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-user"></i>
                        </button> -->
                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>StarBucks</td>
                    <td>test@email.com</td>
                   
                    <td class="td-actions text-right">
                        <!-- <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-user"></i>
                        </button> -->
                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
          <!-- <table class="table tablesorter " id="">
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
              <tr>
                <td class="" colspan="5">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCampaign Name
                </td>
                
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-zoom-split"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-pencil"></i></button>
                </td>
              </tr>
               <tr>
                <td class="" colspan="5">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCampaign Name
                </td>
                
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-zoom-split"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-pencil"></i></button>
                </td>
              </tr> <tr>
                <td class="" colspan="5">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCampaign Name
                </td>
                
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-zoom-split"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-pencil"></i></button>
                </td>
              </tr> <tr>
                <td class="" colspan="5">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCampaign Name
                </td>
                
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-zoom-split"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-pencil"></i></button>
                </td>
              </tr> <tr>
                <td class="" colspan="5">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCompaign Name
                </td>
                
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-zoom-split"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-pencil"></i></button>
                </td>
              </tr> <tr>
                <td class="" colspan="5">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCompaign Name
                </td>
                
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-zoom-split"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-pencil"></i></button>
                </td>
              </tr>
            </tbody>
          </table> -->
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

  <!-- ADD Contact List MODAL -->
  <div class="modal fade" id="AddEmail" tabindex="-1" role="dialog" aria-labelledby="AddEmail" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Contact List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="col-sm-5">
        <div class="form-group">

            <form>
            <div class="form-group">
              <label for="exampleFormControlInput1"> Company Name</label>
              <input type="text" value="" placeholder="Input Contact" class="form-control" />
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"> Company Email</label>
              <input type="text" value="" placeholder="Input Email" class="form-control" />
            </div>
          </form>
          
        </div>
      </div>

      </div>
      <div class="modal-footer">
         <button type="submit" class="btn btn-success" id="biSave">Add</button>
        <button type="submit" class="btn btn-danger" id="biSave" data-toggle="modal" data-target="#Close">Clear</button>
      </div>
    </div>
  </div>
</div>


  @endsection 