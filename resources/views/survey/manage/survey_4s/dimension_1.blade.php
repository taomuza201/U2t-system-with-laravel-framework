<h3> มิติที่ 1 ความปลอดภัย จากการลดการ แพร่เชื้อโรค</h3>

<div class="table-responsive">
    <table class="table table-hover table-bordered">
        <thead class="thead-light">
            <tr>
                <th align="center" scope="col" style="width: 100px;">
                    <center>แนวปฏิบัติ </center>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td class="screen" style="white-space: normal; "> 1. มีมาตรการคัดกรองวัดไข้ ให้กับนักเรียน ครู และผู้เข้ามาติดต่อ ทุกคนก่อนเข้าสถานศึกษา หรือไม่ <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_1" id="survey_4s_no_1" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_1" id="survey_4s_no_1"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_1_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_1_note"
                        id="survey_4s_no_1_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>


            <tr class="border_top">
                <td class="screen" style="white-space: normal; "> 2. มีมาตรการสังเกตอาการเสียงโควิด 19 เช่น ไอ มีน้ำมูก เจ็บคอ เหนื่อยหอบ หายใจลำบาก จมูกไม่ได้กลิ่น ลิ้นไม่รู้รส พร้อมบันทึกผล สำหรับนักเรียน ครู และผู้เข้ามาติดต่อ ทุกคน ก่อนเข้าสถานศึกษาหรือไม่
            <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_2" id="survey_4s_no_2" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_2" id="survey_4s_no_2"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_2_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_2_note"
                        id="survey_4s_no_2_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>

            <tr class="border_top">
                <td class="screen" style="white-space: normal; "> 3. มีนโยบายกำหนดให้นักเรียน ครู และผู้เข้ามาในสถานศึกษาทุกคนต้องสวมหน้ากากผ้าหรือหน้ากากอนามัย หรือไม่
                    <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_3" id="survey_4s_no_3" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_3" id="survey_4s_no_3"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_3_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_3_note"
                        id="survey_4s_no_3_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>
            <tr class="border_top">
                <td class="screen" style="white-space: normal; "> 
                4. มีการจัดเตรียมหน้ากากผ้าหรือหน้ากากอนามัย สำรองไว้ให้กับนักเรียนร้องขอ หรือผู้ที่ไม่มีหน้ากากเข้ามาในสถานศึกษา หรือไม่
                    <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_4" id="survey_4s_no_4" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_4" id="survey_4s_no_4"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_4_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_4_note"
                        id="survey_4s_no_4_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>

            <tr class="border_top">
                <td class="screen" style="white-space: normal; "> 5. มีจุดล้างมือด้วยสบู่ อย่างเพียงพอ หรือไม่<tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_5" id="survey_4s_no_5" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_5" id="survey_4s_no_5"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_5_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_5_note"
                        id="survey_4s_no_5_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>

            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">6. มีการจัดวางเจลแอลกอฮอล์สำหรับใช้ทำความสะอาดมือบริเวณทางเข้าอาคารเรียน หน้าประตูห้องเรียน ทางเข้าโรงอาหาร อย่างเพียงพอหรือไม่
                    <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_6" id="survey_4s_no_6" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_6" id="survey_4s_no_6"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_6_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_6_note"
                        id="survey_4s_no_6_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>

            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">7. มีการจัดโต๊ะเรียน เก้าอี้นักเรียน ที่นั่งในโรงอาหาร ที่นั่งพัก โดยจัดเว้นระยะห่างระหว่างกัน อย่างน้อย 1-2 เมตร (ยึดหลัก social distancing) หรือไม่ <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_7" id="survey_4s_no_7" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_7" id="survey_4s_no_7"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_7_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_7_note"
                        id="survey_4s_no_7_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>

            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">8. มีการทำสัญลักษณ์แสดงจุดตำแหน่งชัดเจนในการจัดเว้นระยะห่างระหว่างกันหรือไม่
                    <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_8" id="survey_4s_no_8" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_8" id="survey_4s_no_8"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_8_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_8_note"
                        id="survey_4s_no_8_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>

            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">9. กรณีห้องเรียนไม่สามารถจัดเว้นระยะห่างตามที่กำหนดได้ มีการสลับวันเรียนของแต่ละชั้นเรียนหรือการแบ่งจำนวนนักเรียน หรือไม่
                    <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_9" id="survey_4s_no_9" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_9" id="survey_4s_no_9"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_9_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_9_note"
                        id="survey_4s_no_9_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>


            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">10. มีการทำความสะอาดห้องเรียน ห้องต่างๆ และอุปกรณ์ที่ใช้ในการเรียน การสอน ก่อนและหลังใช้งานทุกครั้ง เช่น ห้องคอมพิวเตอร์ ห้องดนตรี อุปกรณ์กีฬา หรือไม่
                    <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_10" id="survey_4s_no_10" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_10" id="survey_4s_no_10"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_10_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_10_note"
                        id="survey_4s_no_10_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>


            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">11. มีการทำความสะอาดบริเวณจุดสัมผัสเสี่ยงร่วมกัน ทุกวัน เช่นโต๊ะ เก้าอี้ ราว บันได ลิฟต์ กลอนประตู มือจับประตู - หน้าต่าง หรือไม่
                    <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_11" id="survey_4s_no_11" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_11" id="survey_4s_no_11"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_11_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_11_note"
                        id="survey_4s_no_11_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>

            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">12. มีถังขยะแบบมีฝาปิดในห้องเรียนหรือไม่
                    <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_12" id="survey_4s_no_12" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_12" id="survey_4s_no_12"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_12_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_12_note"
                        id="survey_4s_no_12_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>

            
            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">13. มีการปรับปรุงซ่อมแซมประตู หน้าต่าง และพัดลมของห้องเรียน ให้มีสภาพการใช้งานได้ดี สำหรับใช้ปิด- เปิด ให้อากาศถ่ายเทสะดวก หรือไม่
                    <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_13" id="survey_4s_no_13" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_13" id="survey_4s_no_13"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_13_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_13_note"
                        id="survey_4s_no_13_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>

                    
            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">14. มีการแบ่งกลุ่มย่อยนักเรียนในห้องเรียนในการทำกิจกรรม หรือไม่           <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_14" id="survey_4s_no_14" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_14" id="survey_4s_no_14"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_14_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_14_note"
                        id="survey_4s_no_14_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>



                                
            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">15. มีการปรับลดเวลาในการทำกิจกรรมประชาสัมพันธ์ ภายหลังการเข้าแถวเคารพธงชาติหน้าเสาธง หรือไม่       <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_15" id="survey_4s_no_15" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_15" id="survey_4s_no_15"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_15_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_15_note"
                        id="survey_4s_no_15_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>


            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">16. มีการจัดเหลื่อมเวลาทำกิจกรรมนักเรียน เหลื่อมเวลากินอาหารกลางวัน หรือไม่       <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_16" id="survey_4s_no_16" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_16" id="survey_4s_no_16"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_16_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_16_note"
                        id="survey_4s_no_16_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>

            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">17. มีมาตรการให้เว้นระยะห่างการเข้าแถวทำกิจกรรม หรือไม่     <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_17" id="survey_4s_no_17" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_17" id="survey_4s_no_17"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_17_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_17_note"
                        id="survey_4s_no_17_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>


            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">18. มีการกำหนดให้ใช้ของใช้ส่วนตัว ไม่ใช้สิ่งของร่วมกับผู้อื่น เช่น แก้วน้ำ ช้อน ส้อม แปรงสีฟัน ยาสีฟัน ผ้าเช็ดหน้าหรือไม่     <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_18" id="survey_4s_no_18" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_18" id="survey_4s_no_18"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_18_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_18_note"
                        id="survey_4s_no_18_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>

            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">19. มีห้องพยาบาลหรือพื้นที่สำหรับแยกผู้มีอาการเสี่ยงทางระบบทางเดินหายใจหรือไม่  <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_19" id="survey_4s_no_19" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_19" id="survey_4s_no_19"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_19_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_19_note"
                        id="survey_4s_no_19_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>


            <tr class="border_top">
                <td class="screen" style="white-space: normal; ">20. มีนักเรียนแกนนำด้านสุขภาพ จิตอาสา เป็นอาสาสมัคร ในการช่วยดูแล สุขภาพเพื่อนนักเรียนด้วยกันหรือดูแลรุ่นน้องหรือไม่  <tr>
                <td>
                    <center>
                        <input type="radio" name="survey_4s_no_20" id="survey_4s_no_20" value="yes"
                            checked required>
                        <label>มี</label>
                        <input type="radio" name="survey_4s_no_20" id="survey_4s_no_20"
                        value="no" required>
                        <label>ไม่มี</label>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea
                        class="form-control{{ $errors->has('survey_4s_no_20_note') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('หมายเหตุ') }}" name="survey_4s_no_20_note"
                        id="survey_4s_no_20_note" cols="30" rows="3" maxlength="255"
                        style="height:auto;"></textarea>
                </td>
            </tr>
            </td>
            </tr>




            
        </tbody>
    </table>
    <div class="row m-5">
        <div class="col-1 col-md-4 ">
        </div>
        <div class="col-8 col-md-4 ">
            <button type="button" class="btn btn-primary btn-lg btn-block" id="next_dimension_2">หน้าถัดไป</button>
        </div>
        <div class="ccol-1 ol-md-4 ">
        </div>
    </div>


</div>