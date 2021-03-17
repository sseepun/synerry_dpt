<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .intro-minisite-01 {
            display: block; position: relative; width:100%; height: 100vh; overflow:hidden;
        }
        .intro-minisite-01 .intro-container {
            position:relative; display:flex; justify-content: center; align-items: center; width:100%; height: calc(100% - 4rem);
            padding: 1rem; background-size: cover; background-position: center;
        }
        .intro-minisite-01 .date-title {
            font-size: 4.5rem; line-height: .8;
        }
        .intro-minisite-01 .text-container {
            padding-top: 7.5rem;
        }
        .intro-minisite-01 .links { 
            display:flex; justify-content:center; align-items: flex-start; 
            height: 4rem;
        }
        .intro-minisite-01 .links::before {
            content: ''; position:absolute; bottom: 100%; left:0; 
            width:100%; height: 2.5rem; clip-path: polygon(100% 0, 0 100%, 100% 100%);
            background: #fe4d01;
        }
        .intro-minisite-01 .link {
            text-decoration: none; display:flex; align-items:center; font-weight: 200;
        }
        .intro-minisite-01 .link em{
            font-size: 1.625rem; margin-left: .75rem;
        }
        @media screen and (max-width: 991.98px){
            .intro-minisite-01 .date-title {
                font-size: 3.5rem;
            }
        }
        @media screen and (max-width: 767.98px){
            .intro-minisite-01 .date-title {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body class="loading">
    <section class="intro-minisite-01">
        <div class="intro-container" style="background-image:url('public/assets/app/images/bg/intro-04.jpg');">
            <div class="text-container">
                <div class="grid sm-100 mt-0 text-center" style="color:#202221;" data-aos="fade-up" data-aos-delay="150">
                    <h1 class="date-title fw-400 color-01">
                        ๕ ธันวาคม ๒๕๖๔
                    </h1>
                    <p class="h4 fw-400 ws-nowrap" style="color: #bf8321;">
                        วันชาติ วันพ่อแห่งชาติ และวันคล้ายวันพระบรมราชสมภพ
                    </p>
                    <p class="h6 sm fw-400 lh-xs xs-no-br">
                        พระบาทสมเด็จพระบรมชนกาธิเบศร มหาภูมิพลอดุลยเดชมหาราช บรมนาถบพิตร
                    </p>
                    <img class="sep sep-01 my-2" src="public/assets/app/images/misc/sep-01.png" alt="Separation Icon" />
                    <p class="lg fw-400 xs-no-br">
                        น้อมรำลึกในพระมหากรุณาธิคุณอันหาที่สุดมิได้ <br>
                        ข้าพระพุทธเจ้า คณะผู้บริหาร และพนักงาน <br>
                        กระทรวงพลังงาน
                    </p>
                </div>
            </div>
        </div>
        <div class="links text-center bg-01" data-aos="fade-up" data-aos-delay="300">
            <a class="link color-white mr-5" href="#" >
                เข้าสู่เว็บไซต์
                <em class="far fa-arrow-alt-circle-right"></em>
            </a>
            <a class="link color-white" href="#">
                ENTER WEBSITE
                <em class="far fa-arrow-alt-circle-right"></em>
            </a>
        </div>
    </section>
    
    <?php include_once('include/script.php'); ?>
</body>
</html>
