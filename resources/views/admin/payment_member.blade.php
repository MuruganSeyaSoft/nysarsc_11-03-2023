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
          <span class="breadcrumb-item active">Member's Payment Details</span>
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

<br/>
<br/>
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







                            
<!-- asdasd <p id="demo"></p> -->






      <div class="br-pagebody">
        <div class="br-section-wrapper bd">
       

          <div class="table-wrapperb">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <!-- <th>#</th> -->
                  <th>Reg.Member &<br>  Phone No</th>
                  <th>Payment Mode & <br> Status</th>
                  <th>Trans Id / <br>
                   Cheque No </th>
                  <th>Name Of <br>Card</th>
                  <th>Total<br> Amount Paid</th>
                   <th>Coupon <br>Code</th>
                  <th>Auth ID</th> 
                  <th>Total<br> Members</th> 
                  <th>Member's<br> View</th> 
                  <th>Paid<br> Date</th> 
                  <th style="display:none;"></th> 
                 

                </tr>
              </thead>
              <tbody>
              @php $i=1; @endphp    
         @foreach($membercheckout as $membercheckout)  

         @php $a = $i++; @endphp
        
<tr>
              <!-- <td>{{$a}}</td> -->
              <td>{{$membercheckout['member']->first_name}} {{$membercheckout['member']->last_name}}<br/>
              {{$membercheckout['member']->mobile}}</td>


              <td>@if($membercheckout['payment_mode']==1 ) <b style="color:green;">Card </b> @else <b style="color:red;"> Cheque &nbsp;
              &nbsp;&nbsp; 
              <small><a href="{{$membercheckout['cheque_document']}}" download>Download </a></small></b> @endif
              <br/><hr>
              <small>@if($membercheckout['approved_status']==1 ) Approved @else <b style="color:red;"> Pending &nbsp;&nbsp; &nbsp;
              <a href="{{route('cheque_payment_status',$membercheckout['id'])}}" title="Payment Approved Section">
                <i class="fa fa-edit" title="Payment Approved Section" data-toggle="tooltip"></i>
                </a>
            </b> @endif </small>
             </td>


              <td>{{$membercheckout['transaction_id']}}</td>
              <td>@if($membercheckout['name_on_card']!=''){{$membercheckout['name_on_card']}} @else <b style="color:red;"> NULL </b> @endif</td>
              
              <td>{{$membercheckout['amount']}}</td>
              
               <td>@if($membercheckout['discount_amount']!=0) <b style="color:red;">{{$membercheckout['coupon_code']}}<br/>
               @if($membercheckout['discount_type'] == 1) ( Flat {{$membercheckout['discount_amount']}} Off) @else  {{$membercheckout['discount_amount']}} % Off    @endif</b>
               @else <b style="color:blue;">Not Applied </b> @endif</td>
              
              
              <td>@if($membercheckout['auth_id']!=''){{$membercheckout['auth_id']}} @else <b style="color:red;"> NULL </b>  @endif</td>
              <td>{{$membercheckout['quantity']}}</td>
              <td> 
               <a class="btn btn-outline-primary btn-sm edit-button"  href="{{route('c_member_view',$membercheckout['id'])}}" target="_blank">
                                <i class="fa fa-eye" title="View Details on Members" data-toggle="tooltip"></i>
                        </a>
               </td>

                                                <?php 
                                                $aa = $membercheckout['created_at'];$created_at = explode(' ',$aa);
                                                $bb = $created_at[0];
                                                ?>


               <td>{{$bb}}</td>


              <td style="display:none;"></td>
</tr>




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




    
@endsection
@section('scripts')
    <script>
        $('#member_peyment_details').addClass('active')
        $('#site_title').html(' | Members Payment Details ')
    </script>
    <script src="{{asset('admin_lib/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_lib/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin_lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js')}}"></script>
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
            email: {
                required: true
            },


        },
        messages: {
            email: {
                required: "Email ID is required"
            },


        },

        submitHandler: function(form) {
            $('.msgDiv').html(``);
            var data = new FormData(form);
            $.ajax({
                type: "post",
                url: "{{route('member_store')}}",
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
    
@endsection