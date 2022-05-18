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
                <center> ตำแหน่ง </center>
            </th>
            <th align="center" scope="col">
                <center> ประเภท </center>
            </th>
            <th align="center" scope="col">
                <center> อีเมล </center>
            </th>
            <th align="center" scope="col">
                <center> เบอร์โทรศัพท์ </center>
            </th>
        </tr>
    </thead>
    <tbody>

        @php
        $num_no = 1;
        @endphp
        @foreach ($people as $row)
        <tr>
            <td>{{$num_no}}</td>
            <td>{{$row->districts_name}}</td>
            <td>
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
            </td>
            <td>{{$row->fname}}</td>
            <td>{{$row->lname}}</td>
            <td>
                @if ($row->status == '1')
                1. เจ้าหน้าที่วิเคราะห์ข้อมูล (Data Analytics)
                @elseif($row->status == '2')
                2. เจ้าหน้าที่จัดการข้อมูลติดตาม/เฝ้าระวัง COVID (ร่วมกับ ศบค.)
                @elseif($row->status == '3')
                3. เจ้าหน้าที่จัดการข้อมูลราชการในพื้นที่ ที่เป็นข้อมูลอิเล็คทรอนิกส์ (ร่วมกับ
                กพร.)
                @elseif($row->status == '4')
                4. เจ้าหน้าที่ดำเนินกิจกรรม/โครงการยกระดับรายตำบล
                @elseif($row->status == '5')
                5. เจ้าหน้าที่พัฒนาทักษะอาชีพใหม่
                @elseif($row->status == '6')
                6. เจ้าหน้าที่ถ่ายทอดองค์ความรู้เทคโนโลยี นวัตกรรม
                @endif

            </td>
            <td>
                @if ($row->type == '1')
                01 บัณฑิตจบใหม่
                @elseif($row->type == '2')
                02 ประชาชน
                @elseif($row->type == '3')
                03 นักศึกษา
                @endif
            </td>
            <td>
                {{$row->email}}
            </td>
            <td>
                {{$row->phone}}
            </td>

        </tr>

        @php
        $num_no ++;
        @endphp
        @endforeach

    </tbody>
</table>