</div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="left_content col-lg-4">
                <h5>Customer Care</h5>
                <ul>
                    <li>
                        <a href="#">Help center</a>
                    </li>
                    <li>
                        <a href="#">How To Buy</a>
                    </li>
                    <li>
                        <a href="#"> Returns & Conditions </a>
                    </li>
                    <li>
                        <a href="#"> Contact Us </a>
                    </li>
                    <li><a href="#"> Terms & Conditions </a></li>
                    <li>
                        <a href="#"> CCMS - Central Complain Management Systems </a>
                    </li>
                </ul>
                <h5>Earn With</h5>
                <ul>
                    <li>
                        <a href="#"> Univercity</a>
                    </li>
                    <li>
                        <a href="#"> Code of Conduct </a>
                    </li>
                    <li>
                        <a href="#"> Join the Daraz Affiliate Program</a>
                    </li>
                </ul>
            </div>
            <div class="mid_content col-lg-4">
                <h5>EFOSHOP</h5>

                <ul>
                    <li>
                        <a href="#">About </a>
                    </li>
                    <li>
                        <a href="#"> Digital paymennt a </a>
                    </li>

                    <li>
                        <a href="#"> Blog</a>
                    </li>
                    <li>
                        <a href="#"> Cares </a>
                    </li>
                    <li>
                        <a href="#"> Mart </a>
                    </li>
                    <li>
                        <a href="#">Privicy Policy</a>
                    </li>
                    <li>
                        <a href="#"> BPL Live</a>
                    </li>
                    <li>
                        <a href="#"> Donates </a>
                    </li>
                </ul>
            </div>
            <div class="right_content col-lg-4 align-self-center">
                <div class="img">
                    <img src="img/O1CN01hv7zNR1xFCmh1jQ4C_!!6000000006413-2-tps-317-281.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    const baritemsClick = document.querySelector('.bar-icons');
    const catagoriesElement = document.querySelector('.cat-nav-head');
    const innerHeadingElement = document.querySelector('.header-inner');
    const user = document.querySelector('.user');
    let mainCatagoryElement = document.querySelectorAll('.mainLiList');

    baritemsClick.addEventListener('click', (e) => {
        e.preventDefault();
        let value = true;

        if (value) {
            catagoriesElement.classList.toggle('active');
            innerHeadingElement.classList.toggle('active');
            searchElement.classList.remove('active');
        }
    });

    //// FOrLoop

    for (let i = 0; i < mainCatagoryElement.length; i++) {
        mainCatagoryElement[i].addEventListener('click', function() {
            for (let j = 0; j < mainCatagoryElement.length; j++) {
                mainCatagoryElement[j].classList.remove('active');
            }
            mainCatagoryElement[i].classList.add('active');
        });
    }

    //

    let sublist = document.querySelectorAll('.sublist');

    for (let i = 0; i < sublist.length; i++) {
        sublist[i].addEventListener('click', function() {
            for (let j = 0; j < sublist.length; j++) {
                sublist[j].classList.remove('active');
            }
            sublist[i].classList.add('active');
        });
    }

    $('.main-category li').on('click', function() {
        if ($(this).hasClass('active')) {
            $('.sub-category').toggle()
        }
    })

    $('.sub-category li a').on('click', function() {
        $('.slag_categoryes').toggle()
    })

    $('#header-nav-ico').on('click', function() {
        $('#landingPage .search-bar').toggle()
    })
</script>
</body>

</html>