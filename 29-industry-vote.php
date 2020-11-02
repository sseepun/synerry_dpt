<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <div class="intro-02 section-bg lazy-bg" data-src="public/assets/app/images/bg/22.jpg">
        <div class="container">
            <div class="text-container color-white" data-aos="fade-up" data-aos-delay="0">
                <h2 class="fw-100 mb-0">แบบสำรวจ</h2>
                <p class="font-02">
                    เปิดโลกทัศน์ให้ตัวคุณเองด้วยการอัพเดตข่าวสาร <br>
                    ด้านอุตสาหกรรมกับเราได้ที่นี่
                </p>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-12 mt-0" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="300">
                    <div class="menu-column">
                        <div class="menu-container">
                            <?php for($i=0; $i<12; $i++){?>
                                <a class="menu" href="#">
                                    โรงงานและการจัดตั้ง
                                </a>
                            <?php }?>
                        </div>
                        <img class="decor" src="public/assets/app/images/hero/05.png" alt="Decoration" />
                    </div>
                </div>

                <div class="col-lg-9 col-md-12 pb-5 mt-2" data-aos="fade-up" data-aos-delay="600">
                    <?php
                        $breadcrumb = [
                            [ 'url' => '#', 'name' => 'หน้าหลัก' ],
                            [ 'url' => '#', 'name' => 'เกี่ยวกับกระทรวงอุตสาหกรรม' ],
                            [ 'url' => '#', 'name' => 'แบบสำรวจ' ],
                        ];
                        include_once('component/breadcrumb.php');
                    ?>

                    <form action="" method="POST">
                        <div class="question-box border" data-aos="fade-up" data-aos-delay="0">
                            <div class="question-wrapper">
                                <h5>
                                    คุณคิดว่า “www.industry.go.th” ปรับโฉมใหม่ ควรปรับปรุงอะไรเป็นลำดับแรกๆ
                                </h5>
                                <div class="pb-3 border-bottom">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="r_0" id="r_0_0" required />
                                        <label class="form-check-label" for="r_0_0">
                                            ขนาดเว็บไซต์ไม่พอดีกับหน้าจอ
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="r_0" id="r_0_1" required />
                                        <label class="form-check-label" for="r_0_1">
                                            เว็บไซต์รกเกินไป
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="r_0" id="r_0_2" required />
                                        <label class="form-check-label" for="r_0_2">
                                            หาข้อมูลไม่พบ หรือพบยาก
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="r_0" id="r_0_3" required />
                                        <label class="form-check-label" for="r_0_3">
                                            เว็บไซต์ทำงานไม่สมบูรณ์
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="r_0" id="r_0_4" required />
                                        <label class="form-check-label" for="r_0_4">
                                            เว็บไซต์ทำงานช้า
                                        </label>
                                    </div>
                                </div>
                                <div class="btns mt-3">
                                    <button type="submit" class="btn btn-round btn-sm custom-btn-09 mr-1">
                                        โหวต <i class="far fa-check-circle ml-2"></i>
                                    </button>
                                    <a class="btn btn-round btn-sm custom-btn-09" href="#">
                                        ผลโหวต <i class="far fa-chart-bar ml-2"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="result-wrapper">
                                <div class="wrapper">
                                    <h6 class="color-07">จำนวนโหวตทั้งหมด</h6>
                                    <h1>100</h1>
                                    <p>สร้างเมื่อ 19.07.2563</p>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <?php for($i=1; $i<=2; $i++){?>
                        <form action="" method="POST">
                            <div class="question-box border" data-aos="fade-up" data-aos-delay="0">
                                <div class="question-wrapper">
                                    <h5>
                                        สำรวจความพึงพอใจ ของนโยบายการส่งเสริม อุตสาหกรรมสำหรับผู้ประกอบการ
                                    </h5>
                                    <div class="pb-3 border-bottom">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="r_<?= $i ?>" id="r_<?= $i ?>_0" required />
                                            <label class="form-check-label" for="r_<?= $i ?>_0">
                                                พึ่งพอใจมากที่สุด
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="r_<?= $i ?>" id="r_<?= $i ?>_1" required />
                                            <label class="form-check-label" for="r_<?= $i ?>_1">
                                                ค่อนข้างพึ่งพอใจ
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="r_<?= $i ?>" id="r_<?= $i ?>_2" required />
                                            <label class="form-check-label" for="r_<?= $i ?>_2">
                                                พอใจน้อย
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="r_<?= $i ?>" id="r_<?= $i ?>_3" required />
                                            <label class="form-check-label" for="r_<?= $i ?>_3">
                                                ควรปรับปรุง
                                            </label>
                                        </div>
                                    </div>
                                    <div class="btns mt-3">
                                        <button type="submit" class="btn btn-round btn-sm custom-btn-09">
                                            โหวต <i class="far fa-check-circle ml-2"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chart-wrapper">
                                    <div class="chart-container">
                                        <div class="chart" id="chart-<?= $i ?>"></div>
                                        <div class="labels">
                                            <div class="label">
                                                <div class="dot" style="background:#bb2aa8;"></div>
                                                <p>พึ่งพอใจมากที่สุด</p>
                                            </div>
                                            <div class="label">
                                                <div class="dot" style="background:#233370;"></div>
                                                <p>ค่อนข้างพึ่งพอใจ</p>
                                            </div>
                                            <div class="label">
                                                <div class="dot" style="background:#7f8ec0;"></div>
                                                <p>พอใจน้อย</p>
                                            </div>
                                            <div class="label">
                                                <div class="dot" style="background:#cbaaf9;"></div>
                                                <p>ควรปรับปรุง</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php }?>

                    <?php include_once('component/list-footer.php'); ?>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'donut'
            },
            series: [25.0, 25.0, 35.2, 14.8],
            legend: {
                show: false
            },
            colors: ['#bb2aa8', '#233370', '#7f8ec0', '#cbaaf9'],
            plotOptions: {
                pie: {
                    donut: {
                        size: '65%',
                        background: '#ffffff',
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                offsetY: -5
                            },
                            value: {
                                show: true,
                                fontFamily: 'Sukhumvit',
                                fontWeight: 400,
                                fontSize: '26px',
                                color: '#5a5a5c',
                                offsetY: 5
                            },
                            total: {
                                show: true,
                                showAlways: true,
                                label: '',
                                fontSize: '30px',
                                fontWeight: 400,
                                fontFamily: 'Sukhumvit',
                                color: '#5a5a5c',
                                formatter: function(w, d){
                                    return '';
                                }
                            }
                        }
                    }
                }
            }
        }

        var chart1 = new ApexCharts(document.querySelector('#chart-1'), options);
        chart1.render();

        var chart2 = new ApexCharts(document.querySelector('#chart-2'), options);
        chart2.render();
    </script>
</body>
</html>
