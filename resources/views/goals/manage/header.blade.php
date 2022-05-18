<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center ">
    <!-- Mask -->
    <span class="mask bg-gradient-primary opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-md-12 {{ $class ?? '' }}">
                @php
                $data= App\Goal::orderBy('goals_id','desc')->first()
                @endphp
                <h1 class="display-2 text-white">{{ $title }}ครั้งที่
                  
                    @if ( $data!='' && Carbon\Carbon::parse($data->goals_end)->format('Y-m-d') < now()->format('Y-m-d'))
                        xxx
                        
                    @else
                        {{$data->goals_no}}
                        @endif
                        
                </h1>
                @if (isset($description) && $description)
                <p class="text-white mt-0 mb-5">{{ $description }}</p>
                @endif
            </div>
        </div>
    </div>
</div>
