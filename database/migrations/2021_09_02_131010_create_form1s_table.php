<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form1s', function (Blueprint $table) {
            $table->bigIncrements('form1s'); // FK
            // ------------------------------------------------ประชากร
            $table->integer('form1s_man')->default(0)->comment('ชาย');
            $table->integer('form1s_woman')->default(0)->comment('หญิง');
            $table->integer('form1s_totalgender')->default(0)->comment('รวม');
            $table->integer('form1s_household')->default(0)->comment('จำนวนครัวเรือน');
            $table->integer('form1s_elderly')->default(0)->comment('ผู้สูงอายุ');
            $table->integer('form1s_child_to_6_years')->default(0)->comment('จำนวนเด็กแรกเกิด ถึง 6 ปี');
            $table->integer('form1s_chronic_patient')->default(0)->comment('ผู้สูงอายุที่ป่วยเป็นโรคเรื้อรัง');
            $table->integer('form1s_pregnant_women')->default(0)->comment('จำนวนสตรีตั้งครรภ์*');
            $table->integer('form1s_elderly_can_not_help')->default(0)->comment('จำนวนผู้สูงอายุที่ช่วยตนเองไม่ได้*');
            $table->integer('form1s_woman_to_35_years')->default(0)->comment('จำนวนสตรีอายุ 35 ปี ขึ้นไป**');
            $table->integer('form1s_handicapped')->default(0)->comment('จำนวนผู้พิการ*');

            // ------------------------------------------------ สถาน ศึกษา
            $table->integer('form1s_child_development_center')->default(0)->comment('ศูนย์พัฒนาเด็กเล็ก*');
            $table->integer('form1s_school')->default(0)->comment('โรงเรียน');
            $table->integer('form1s_college')->default(0)->comment('วิทยาลัย');
            $table->integer('form1s_university')->default(0)->comment('มหาวิทยาลัย');
            $table->integer('form1s_community_learning_center')->default(0)->comment('ศูนย์เรียนรู้ชุมชน');
            $table->integer('form1s_non_formal_education')->default(0)->comment('ศูนย์การศึกษานอกโรงเรียนและการศึกษาตามอัธยาศัย');
            $table->integer('form1s_village_books')->default(0)->comment('ที่อ่านหนังสือประจำหมู่บ้าน');
            $table->mediumText('form1s_other_educational_1')->nullable()->comment('อื่น ๆ โปรดระบุ 1');
            $table->integer('form1s_other_educational_1_quantity')->default(0)->nullable()->comment('จำนวนอื่น ๆ โปรดระบุ 1');
            $table->mediumText('form1s_other_educational_2')->nullable()->comment('อื่น ๆ โปรดระบุ 2');
            $table->integer('form1s_other_educational_2_quantity')->default(0)->nullable()->comment('จำนวนอื่น ๆ โปรดระบุ 2');

            // ------------------------------------------------ศาสนสถาน
            $table->integer('form1s_measure')->default(0)->comment('วัด');
            $table->integer('form1s_church')->default(0)->comment('คริสตจักร');
            $table->integer('form1s_abbey')->default(0)->comment('สำนักสงฆ์');
            $table->integer('form1s_shrine')->default(0)->comment('ศาลเจ้า ');
            $table->mediumText('form1s_other_religion_1')->nullable()->comment('อื่น ๆ โปรดระบุ 1');
            $table->integer('form1s_other_religion_1_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 1');
            $table->mediumText('form1s_other_religion_2')->comment('อื่น ๆ โปรดระบุ 2');
            $table->integer('form1s_other_religion_2_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 2');

            // ------------------------------------------------จำนวนสาธารณสุข
            $table->integer('form1s_health_hospital')->comment('โรงพยาบาลส่งเสริมสุขภาพ');
            // $table->integer('form1s_sub_district_hospital')->comment('โรงพยาบาลประจำตำบล ');
            $table->mediumText('form1s_other_public_health_1')->nullable()->comment('อื่น ๆ โปรดระบุ 1');
            $table->integer('form1s_other_public_health_1_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 1');
            $table->mediumText('form1s_other_public_health_2')->nullable()->comment('อื่น ๆ โปรดระบุ 2');
            $table->integer('form1s_other_public_health_2_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 2');

            // ------------------------------------------------จำนวนความปลอดภัยในชีวิตและทรัพย์สิน*
            $table->integer('form1s_police')->default(0)->comment('สถานีตำรวจ ');
            $table->mediumText('form1s_other_police_1')->nullable()->comment('อื่น ๆ โปรดระบุ 1');
            $table->integer('form1s_other_police_1_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 1');
            $table->mediumText('form1s_other_police_2')->nullable()->comment('อื่น ๆ โปรดระบุ 2');
            $table->integer('form1s_other_police_2_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 2');

            // ------------------------------------------------จำนวนหน่วยราชการอื่น*

            $table->integer('form1s_district_office')->default(0)->comment('ที่ว่าการอำเภอ');
            $table->integer('form1s_community_development_office')->default(0)->comment('สำนักงานพัฒนาชุมชน');
            $table->integer('form1s_agriculture_office')->default(0)->comment('สำนักงานเกษตร');
            $table->integer('form1s_public_health_office')->default(0)->comment('สำนักงานสาธารณสุข');
            $table->integer('form1s_livestock_office')->default(0)->comment('สำนักงานปศุสัตว์');

            $table->mediumText('form1s_other_government_agencies_1')->nullable()->comment('อื่น ๆ โปรดระบุ 1');
            $table->integer('form1s_other_government_agencies_1_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 1');
            $table->mediumText('form1s_other_government_agencies_2')->nullable()->comment('อื่น ๆ โปรดระบุ 2');
            $table->integer('form1s_other_government_agencies_2_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 2');

            // ------------------------------------------------จำนวนหน่วยธุรกิจอื่น*

            $table->integer('form1s_bank')->default(0)->comment('ธนาคาร ');
            $table->integer('form1s_oil_and_gas_pump')->default(0)->comment('ปั๊มน้ำมันและก๊าซ');
            $table->integer('form1s_industrial_plant')->default(0)->comment('โรงงานอุตสาหกรรม');
            $table->integer('form1s_pig_farm')->default(0)->comment('ฟาร์มหมู');
            $table->integer('form1s_chicken_farm')->default(0)->comment('ฟาร์มไก่ ');
            $table->integer('form1s_rice_mill')->default(0)->comment('โรงสีข้าว');
            $table->integer('form1s_garage')->default(0)->comment('อู่ซ่อมรถ');
            $table->integer('form1s_food_store')->default(0)->comment('ร้านขายอาหาร');
            $table->integer('form1s_electronics_store')->default(0)->comment('ร้านขายเครื่องใช้ไฟฟ้า');

            $table->mediumText('form1s_other_business_1')->nullable()->comment('อื่น ๆ โปรดระบุ 1');
            $table->integer('form1s_other_business_1_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 1');
            $table->mediumText('form1s_other_business_2')->nullable()->comment('อื่น ๆ โปรดระบุ 2');
            $table->integer('form1s_other_business_2_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 2');

            // ------------------------------------------------จำนวนแหล่งน้ำธรรมชาติ*
            $table->integer('form1s_river')->default(0)->comment(' แม่น้ำ ');
            $table->integer('form1s_creek')->default(0)->comment(' ลำห้วย ');
            $table->integer('form1s_natural_reservoir')->default(0)->comment(' อ่างเก็บน้ำธรรมชาติ  ');

            $table->mediumText('form1s_other_river_1')->nullable()->comment('อื่น ๆ โปรดระบุ 1');
            $table->integer('form1s_other_river_1_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 1');
            $table->mediumText('form1s_other_river_2')->nullable()->comment('อื่น ๆ โปรดระบุ 2');
            $table->integer('form1s_other_river_2_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 2');

            // ------------------------------------------------จำนวนแหล่งน้ำที่สร้างขึ้น*
            $table->integer('form1s_irrigation_system')->default(0)->comment('เหมืองฝาย');
            $table->integer('form1s_irrigation_canal')->default(0)->comment('คลองชลประทาน');
            $table->integer('form1s_canal')->default(0)->comment('คลองส่งน้ำ');
            $table->integer('form1s_pool')->default(0)->comment('สระ');
            $table->integer('form1s_self_built_reservoir')->default(0)->comment('อ่างเก็บน้ำที่สร้างขึ้นเอง');
            $table->integer('form1s_shallow_well')->default(0)->comment('บ่อน้ำตื้น');
            $table->integer('form1s_rocking_pond')->default(0)->comment('บ่อโยก');
            $table->integer('form1s_village_water_supply')->default(0)->comment('ประปาหมู่บ้าน');

            $table->mediumText('form1s_other_water_source_1')->nullable()->comment('อื่น ๆ โปรดระบุ 1');
            $table->integer('form1s_other_water_source_1_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 1');
            $table->mediumText('form1s_other_water_source_2')->nullable()->comment('อื่น ๆ โปรดระบุ 2');
            $table->integer('form1s_other_water_source_2_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 2');

            // ------------------------------------------------ทรัพยากรธรรมชาติ
            $table->integer('form1s_forest')->default(0)->comment('ป่าไม้');

            $table->mediumText('form1s_other_natural_resources_1')->nullable()->comment('อื่น ๆ โปรดระบุ 1');
            $table->integer('form1s_other_natural_resources_1_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 1');
            $table->mediumText('form1s_other_natural_resources_2')->nullable()->comment('อื่น ๆ โปรดระบุ 2');
            $table->integer('form1s_other_natural_resources_2_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 2');

            // ------------------------------------------------จำนวนแหล่งทุนในตำบล*
            $table->integer('form1s_community_welfare_fund')->default(0)->comment(' กองทุนสวัสดิการชุมชน');
            $table->integer('form1s_savings_program')->default(0)->comment(' โครงการเงินออม');
            $table->integer('form1s_health_security_fund')->default(0)->comment(' กองทุนหลักประกันสุขภาพฯ ');
            $table->integer('form1s_contribution_welfare_fund')->default(0)->comment(' กองทุนสวัสดิการสมทบ ');

            $table->mediumText('form1s_other_capital_1')->nullable()->comment('อื่น ๆ โปรดระบุ 1');
            $table->integer('form1s_other_capital_1_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 1');
            $table->mediumText('form1s_other_capital_2')->nullable()->comment('อื่น ๆ โปรดระบุ 2');
            $table->integer('form1s_other_capital_2_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 2');

            // ------------------------------------------------จำนวนกลุ่มอาชีพ / วิสาหกิจชุมชนภายในชุมชน*
            $table->integer('form1s_otop')->default(0)->comment('กลุ่มอาชีพสินค้า OTOP');
            $table->integer('form1s_community_enterprise_group')->default(0)->comment('กลุ่มวิสาหกิจชุมชน');
   

            $table->mediumText('form1s_other_enterprise_1')->nullable()->comment('อื่น ๆ โปรดระบุ 1');
            $table->integer('form1s_other_enterprise_1_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 1');
            $table->mediumText('form1s_other_enterprise_2')->nullable()->comment('อื่น ๆ โปรดระบุ 2');
            $table->integer('form1s_other_enterprise_2_quantity')->default(0)->comment('จำนวนอื่น ๆ โปรดระบุ 2');


              // ------------------------------------------------อ้างอิง
            $table->bigInteger('form1s_user')->unsigned()->index()->nullable(); // คนทำ
            $table->foreign('form1s_user')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('form1s_districts_id')->unsigned()->index()->nullable();  //ตำบล
            $table->foreign('form1s_districts_id')->references('districts_id')->on('districts')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form1s');
    }
}
