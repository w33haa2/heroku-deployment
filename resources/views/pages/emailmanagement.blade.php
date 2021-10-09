@extends('layouts.app', ['page' => __('email management'), 'pageSlug' => 'emailmanagement'])


@section('content')
<div class="row">
  
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
    <button type="submit" class="btn btn-fill btn-success">Add</button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th class="">
                  Compaign Name
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
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCompaign Name
                </td>
                
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-zoom-split"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-pencil"></i></button>
                </td>
              </tr>
               <tr>
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
  @endsection 