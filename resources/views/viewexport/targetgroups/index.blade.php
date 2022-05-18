<table>
    <thead>
        <tr>
            <th align="center" scope="col">
                <center>ลำดับ </center>
            </th>
            <th align="center" scope="col">
                <center>ตำบล </center>
            </th>
            <th align="center" scope="col">
                <center>คำนำหน้า </center>
            </th>
            <th align="center" scope="col">
                <center> ชื่อ </center>
            </th>
            <th align="center" scope="col">
                <center> นามสกุล </center>
            </th>
            <th align="center" scope="col">
                <center> เบอร์โทรศัพท์ </center>
            </th>
            <th align="center" scope="col">
                <center> ที่อยู่ </center>
            </th>
            <th align="center" scope="col">
                <center> อาชีพปัจจุบัน </center>
            </th>
            <th align="center" scope="col">
                <center> เหตุผล/เป้าหมายที่เข้าร่วมโครงการ </center>
            </th>
        </tr>
    </thead>
    <tbody>

        @php
        $num_no = 1;
        @endphp
        @foreach ($targetgroups as $row)
        <tr>
            <td>{{$num_no}}</td>
            <td>{{$row->districts_name}}</td>
            <td>
                @if ($row->targetgroups_gender	 == 'Mr')
                นาย
                @elseif($row->targetgroups_gender	 == 'Ms')
                นางสาว
                @elseif($row->targetgroups_gender	 == 'Mrs')
                นาง
                @elseif($row->targetgroups_gender	 == 'prof')
                อาจารย์
                @elseif($row->targetgroups_gender	 == 'asstprof')
                ผู้ช่วยศาสตราจารย์
                @endif
            </td>
            <td>{{$row->targetgroups_fname}}</td>
            <td>{{$row->targetgroups_lname}}</td>
            <td>{{$row->targetgroups_phone}}</td>
            <td>{{$row->targetgroups_address}}</td>
            <td>{{$row->targetgroups_career}}</td>
            <td>{{$row->targetgroups_reason}}</td>
          

        </tr>

        @php
        $num_no ++;
        @endphp
        @endforeach

    </tbody>
</table>