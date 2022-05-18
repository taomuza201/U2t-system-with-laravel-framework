@php
$round = 1;
$count_products = count($todolist);
$num =1;
$marks_start = array();
$marks_end = array();
for($i=1;$i<=3000;$i+=4){ $marks_start[]=$i; } for($i=0;$i<=3000;$i+=4){ $marks_end[]=$i; } @endphp @foreach($todolist
    as $row) @if ( $num==1||in_array($num,$marks_start)) <div class="row mb-4">
    <div class="col">
        <div class="card-deck sha">

            @endif

            <div class="card rounded shadow-lg" >
                <div class="pt-1 pr-1"> 
                   @if ($row->todolists_madeby  == auth()->user()->id)


                    
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"  data-id="{{$row->todolists_id}}"   id="edit-modal"> 
                    <i class="ni ni-settings-gear-65"></i> 
                    </a>
                   @endif

                </div>
                <div onclick="showdataTodolist(this)" data-id="{{$row->todolists_id}}"    > 

                <div class="card-body">

                    <h5 class="card-title">{{$row->todolists_title}}</h5>
                    <p class="card-text">{{$row->todolists_detail}}.</p>

                </div>
                <div class="card-footer pt-1 pb-1">

                    <small class="text-muted">ผู้รับผิดชอบงาน : 
                        @php
                        $todolists_assigns_todolists =  App\TodolistsAssign::select('todolists_assigns_at')->where('todolists_assigns_todolists',$row->todolists_id)->get();
    
                        $todolists_assigns_todolists_id =[];
                            foreach ($todolists_assigns_todolists as $item) {
                                     ;
                                $testuser =  App\User::select('fname','lname')->where('id',$item->todolists_assigns_at)->get();
                           
                                foreach ($testuser as $item) {
                                        echo $item->fname.' '.$item->lname.',';
                                }   
                        }
                        @endphp</small> 
                     <br>


                    @php
                    $todolists_assign  = App\User::select('fname','lname')->where('id',$row->todolists_madeby)->first();
                    @endphp
                    <small class="text-muted">หมอบหมายงานโดย  : {{$todolists_assign->fname}} {{$todolists_assign->lname}}</small> 
                </div>
                <div class="card-footer pt-2">
                    <div class="row ">
                        <div class="col-10 col-md-8 ">
                            <small class="text-muted">



                                กำหนดวันส่งงาน {{ date('d-m-Y', strtotime($row->todolists_deadline)) }}
                            </small>
                        </div>
                        <div class="col-10  col-md-4 ">
                            @if ($row->todolists_status == 0)

                            <span class="badge badge-danger text-right">ยังไม่สำเสร็จ</span>
                            @else
                            <span class="badge badge-success text-right">เสร็จแล้ว</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            </div>


            @if (in_array($num,$marks_end) || $num == $count_products)


            @php
            $chk_div = $count_products%4;
            @endphp


            @if ($chk_div !=0)
            @php
            $num_chk= (4*$round)-$num;
            @endphp

            @for($i=1;$i<=$num_chk ;$i++) <div class="card invisible">

        </div>



        @endfor
        @endif



    </div>
    </div>
    </div>
    @php
    $round ++;
    @endphp
    @endif

    @php
    $num ++;
    @endphp
    @endforeach
