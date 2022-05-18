@php
                        $num_pro = 1;
                        @endphp
                        @foreach ($pro as $row)
                        <div class="row">

                            <div class="col pl-5">
                                <span style="font-size: 18px;">
                                    {{$num_pro}}.
                                    @if ($row->gender == 'Mr')
                                    นาย
                                    @elseif($row->gender == 'Ms')
                                    นางสาว
                                    @elseif($row->gender == 'Mrs')
                                    นาง
                                    @elseif($row->gender == 'prof')
                                    อาจารย์
                                    @elseif($row->gender == 'asstprof')
                                    ผู้ช่วยศาสตราจารย์
                                    @endif

                                    {{$row->fname}}
                                    {{$row->lname}}
                                    ตำบล :
                                    {{$row->districts_name}}
                                    เบอร์โทรศัพท์ :
                                    {{$row->phone}}
                                </span>
                            </div>

                        </div>
                        @php
                        $num_pro ++;
                        @endphp
                        @endforeach