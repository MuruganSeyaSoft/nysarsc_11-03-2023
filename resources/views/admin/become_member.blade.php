@extends('admin.app')
<style>
    .select2-container {
        z-index:10050;
        width: 100% !important;
        padding: 0;
    }
    .pull-left{
      float: left !important;
    }
    .icon {
   font-size: 25px;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@section('content')
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{route('admin_dashboard')}}">Home</a>
          <span class="breadcrumb-item active">Become Member Management</span>
        </nav>
      </div><!-- br-pageheader -->
      <!-- <div class="br-pagetitle">
        <i class="icon ion-ios-people-outline"></i>
        <div>
          <h4>Users</h4>
          <p class="mg-b-0">User listing</p>
        </div>
      </div> -->


                      @if(session()->has('msg'))
                       <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button>
                        <span style="padding-left: 550px;"> {{ session()->get('msg') }}</span>
                       </div>
                       @endif


                       @if(session()->has('message2'))
                       <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                        <span style="padding-left: 550px;"> {{ session()->get('message2') }}</span>
                       </div>
                       @endif


<script>
  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
  </script>
                       

@if(session()->has('info'))
<b style="color: green; padding-left: 390px; ">
<div class="alert alert-success" role="alert">
<ul style="padding-left: 435px;">
{{ session()->get('info') }}.<br>
Please wait.Page will be Automatically Redirected
</ul>
</div>
.</b>
<script>
setTimeout(function() {
location.href = "{{route('admin.category.category_new')}}";
}, 4000);
</script>
@endif


@if(session()->has('danger'))
<b style="color: green; padding-left: 390px; ">
<div class="alert alert-danger" role="alert">
<ul style="padding-left: 435px;">
{{ session()->get('danger') }}.<br>
</ul>
</div>
</b>

@endif






                            
<!-- asdasd <p id="demo"></p> -->

<br>

@if($errors->any())

        <div id="error" >
        <h5 style="color:red;padding-left: 452px;">{{$errors->first()}}</h5>
        </div>
        <br>
        <script>
        $("#error").show();
        setTimeout(function() {
            $("#error").hide();
        }, 5000);
       
    </script>
        @endif




      <div class="br-pagebody">
        <div class="br-section-wrapper bd">
        <a href="javascript:;" class="btn btn-primary btn-with-icon pull-right mb-1 add-button">
            <div class="ht-40">
                <span class="icon wd-40"><i class="fa fa-plus"></i></span>
                <span class="pd-x-15">Add New Become Member </span>
            </div>
        </a>

       
      

       

          <div class="table-wrapperb">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <!-- <th>Id</th> -->
                  <th>Data</th>
                  <th>Action</th>
                  <th>Status</th>
                  <!-- <th>Status Change</th> -->
                  <th style="display:none;"></th> 
                 

                </tr>
              </thead>
              <tbody>
              @php $i=1; @endphp    
         @foreach($details as $title)  

         @php $a = $i++; @endphp
        
<tr>
              <!-- <td>{{$a}}</td> -->
               <td>{!!$title['data']!!}</td>
               <td> 
               <a class="btn btn-outline-primary btn-sm edit-button"  onclick="return show_modal{{$title['id']}}(this);">
                                <i class="fa fa-pencil" title="Edit" data-toggle="tooltip"></i>
                        </a>
                        <br> <br>
                        <a  onclick="return confirm('Are you sure to delete?')" 
                                href="{{route('b_member_delete',$title['id'])}}"><b style="color:red;"><i class="icon ion-trash-b"></i></b></a>
               </td>
               <td>
                  @if($title['status']==1)
                  <b style="color:green;">Active</b>
                  @else
                  <b style="color:red;"> IN-Active</b>
                  @endif
                  <br><br>
                  @if($title['status']==1)
                  <a href="{{route('b_member_status_deactive',$title['id'])}}" title="Deactivate"> <i class="icon ion-arrow-down-b"></i></a>
                  @else
                  <a href="{{route('b_member_status_active',$title['id'])}}"  title="Activate"> <i class="icon ion-arrow-up-c"></i></a>
                  @endif
                 </td>

                

                 

               <td style="display:none;"></td>
</tr>



<script>
                function show_modal{{$title['id']}}(e)
                {
                    console.log (e.href);
                    $("#iframe_modal").attr("src", e.href);
                    $('#myModal{{$title['id']}}').modal('show');
                    return false;
                }
                </script>




                   <!-- Edit Modal -->
        <div class="modal fade" id="myModal{{$title['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="overflow:hidden;">
        <div class="modal-dialog">
          <div class="modal-content" style="height:100%;overflow:auto;">
            <div class="modal-header">
              <h4 class="modal-title text-center" id="myModalLabel">Edit  Become Member Details</h4>
            </div>
            <form class="" id="" action="{{route('b_member_update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="w_id" value="{{$title['id']}}">
               <div class="modal-body">
                  
                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                    <!-- <label>First Name<span class="tx-danger">*</span></label> -->
                    <textarea   name="b_member" id="description"
                class="summernote"  rows="5" placeholder="Description"  > {{$title['data']}}</textarea>
                  </div>
                    </div>
                    
   

                </div>

              

                  

              <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="window.location.reload();">Close</button>
                <button type="submit" class="btn btn-primary button-save addBtn">Update</button>
              </div>
           </form>




          </div>
        </div>
        </div>





@endforeach

</tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->


      <footer class="br-footer">
        <div class="footer-left">
         
        </div>
        <div class="footer-right d-flex align-items-center">
           {{--<span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a> --}}
        </div>
      </footer>


        <!-- Register Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="overflow:hidden;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-center" id="myModalLabel">Add New Become Meber Details</h4>
            </div>

           
          
            <form class="form-user" id="form-user" action="javascript:;">
              <div class="modal-body">
                  
                    <div class="row">
                    <div class="col-md-12">

                  
                    <textarea   name="b_member" id="description"
                class="summernote1"  rows="5" placeholder="Description"  ></textarea>

                  <br>
            <div class="msgDiv"></div>
            <br>
                

              <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="window.location.reload();">Close</button>
                <button type="submit" class="btn btn-primary button-save addBtn">Submit</button>
              </div>

            

           </form>
          </div>
        </div>
        </div>



    
@endsection
@section('scripts')
    <script>
        $('#b_member').addClass('active')
        $('#site_title').html(' | Become Member Management ')
    </script>
    <script src="{{asset('public/admin_lib/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/admin_lib/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{asset('public/admin_lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('public/admin_lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js')}}"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script>

        $(function(){
            'use strict';

            $('#datatable1').DataTable({
              
            responsive: true,

            // responsive: { details: false} // Hide Plus Button on Datatable 


            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            },
            "paging": true,
            "ordering": true,
            "searching": true,
            "info": false,
            "bLengthChange" : false,    
            stateSave: true, 
            "ordering": false
            });
            // $('.dataTables_filter').addClass('pull-left');
            // Select2
            $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity }); 

        });

        
        $("#form-user").validate({
        normalizer: function(value) {
            return $.trim(value);
        },
        rules: {
            b_member: {
                required: true
            },


        },
        messages: {
            b_member: {
                required: "Become Member Details is required"
            },

            
        },

        submitHandler: function(form) {
            $('.msgDiv').html(``);
            var data = new FormData(form);
            $.ajax({
                type: "post",
                url: "{{route('b_member_store')}}",
                data: data,
                dataType: "json",
                processData: false,
                contentType: false,
                cache: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if (data.status == 1) {

                        $('.msgDiv').html(` <div class="alert alert-success">` + data.message + `</div>`);
                        setTimeout(function() {
                            $('.msgDiv').html(``);
                            window.location.reload();
                        }, 1000);

                    } else {
                        //var errors = data.message;
                      //alert(errors);
                      var object = ((data.message));
                      //alert(JSON.stringify(data.message.mobile));

                     // alert(fg);

//                       var output = '';
// for (var property in object) {
//   output += property + ': ' + object[property]+'; ';
// }
// alert(output);



                      let txt = "";
                      
                        for (let x in object) {
                        txt += object[x] + '<br/>';
                        };
                        //  alert(txt);

                        // var html = "";
                        // $.each(data.errors, function(key, value) {
                        //     html += value + "<br/>";
                        // });
                      //  document.getElementById("demo").innerHTML = txt;
                       // alert(txt);

                        $('.msgDiv').html(`<div class="alert alert-danger m-2">` + txt + `</div>`);
                        // setTimeout(function() {
                        //     $('.msgDiv').html(``);
                        //     window.location.reload();
                        // }, 1000);
                    }
                }
            });
            return false;
        }
    });




        $(".delete-button").click(function(){
            $("#deleteModal").modal();
            $('.delete-class').data('delete-url', $(this).data('url'));
        });
        $(".delete-class").click(function(){
            var url = $(this).data('delete-url');
            $('.deleteBtn').prop('disabled', true)
            $.ajax({
                type : "GET",
                url : url,
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function() {
                  $(".deleteBtn").text("Deleting..");  
                },
                success: function(data) {
                    $(".deleteBtn").text("Delete"); 
                    $('.deleteBtn').prop('disabled', false)
                    if (data.status == true) {
                        toastr["success"](data.response);
                        setTimeout(function() {      
                                window.location.href=""
                        }, 1000);
                    } else {
                        if (data.message) {
                        toastr["error"](data.response);
                        }
                    }
                }
            })
        })

        function getuser(id,name,phone,pincode,status){
            $('#addModal').trigger('reset')
            $('#id').val(id)
            $('#name').val(name)
            $('#phone').val(phone)
            $('#pincode_id').val(pincode).trigger('change')
            $('#status').val(status).trigger('change')
            $(".addBtn").text("Submit");
            $("#addModal").modal();
        }
    
        $(function(){
            'use strict'

            // FOR DEMO ONLY
            // menu collapsed by default during first page load or refresh with screen
            // having a size between 992px and 1299px. This is intended on this page only
            // for better viewing of widgets demo.
            $(window).resize(function(){
            minimizeMenu();
            });

            minimizeMenu();

            function minimizeMenu() {
            if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
                // show only the icons and hide left menu label by default
                $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                $('body').addClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideUp();
            } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
                $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                $('body').removeClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideDown();
            }
            }
        });

        $(".add-button").click(function(){
            $("#addModal").modal();
        });

    </script>



<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
        $(".summernote").prop("readonly",true);
           $('.summernote').summernote({
            
            height: 400,
            dialogsInBody: true,
            callbacks:{
                onInit:function(){
                $('body > .note-popover').hide();
                }
             },
         });

         $('.summernote1').summernote({
            height: 400,
            dialogsInBody: true,
            callbacks:{
                onInit:function(){
                $('body > .note-popover').hide();
                }
             },
         });


      });
</script>

    
@endsection