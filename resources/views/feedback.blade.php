<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>意見回饋</title>
    <!-- reset css檔案 -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css ') }}" />
    <!-- 模板 css檔案 -->
    <link rel="stylesheet" href="{{ asset('/css/feedback.css') }}" />
  </head>
  <body>
    <header id="header">
      <nav>
        <!-- 導覽列上的店家logo -->
        <a href="#" class="nav_logo">
          <div class="logo">
            <img class="logo_img" src="./pics/logo.jpeg" alt="" />
          </div>
        </a> 
        <!-- 選單列 -->
        <div class="nav_content">
          <!-- 1440px 選單列 -->
          <ul class="nav_content_pc">
            <li>
              <a href="#">品牌故事</a>
            </li>
            <li>
              <a href="#">商品介紹</a>
            </li>
            <li>
              <a href="#">門市據點</a>
            </li>
            <li>
              <a href="#">意見回饋</a>
            </li>
          </ul>
        </div>
        <div class="burger_link">
            <!-- 漢堡條樣式 -->
            <label class="burger" for="burger">
              <div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
              </div>
            </label>
            <input type="checkbox" id="burger" hidden/>
            <ul class="list">
              <li>
                <a href="##" class="list-project">品牌故事</a>
              </li>
              <li>
                <label class="list-project" for="commodity" for="commodity">
                    商品介紹
                </label>
                <input type="checkbox" id="commodity" hidden />
                <ul class="commodity-box">
                  <li>
                    <a class="commodity-list" href="#">
                        <p>
                            飲料列表
                        </p>
                        <img src="./pics/drink_icon.png" alt="drink_icon" style="width: 60px;">
                    </a>
                  </li>  
                  <li>
                    <a class="commodity-list" href="#">
                        <p>
                            餐點列表
                        </p>
                        <img src="./pics/meal_icon.png" alt="meal_icon" style="width: 60px;">
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="list-project">門市據點</a>
              </li>
              <li>
                <a href="##" class="list-project">意見回饋</a>
              </li>
            </ul>
        </div>
      </nav>
    </header>

    <main id="main">
      
      <form action="" method="">
        
        <div class="form_title text_color">意見回饋</div>
        <div class="form_text text_color">
          為了使每位顧客都有一個美好的消費體驗，提供一個更舒適的環境、更優良的服務來努力。</br>
          如果有任何的建議或需求，請與我們意見交流，我們將由專責單位或人員來為您服務，做全方位的服務和改進。
          </br></br>
          客服專線:07-3121088 服務時間:09:00~18:00
        </div>

    
        <div class="forms">
          <div>
            <input id="feedback_date" type="text" name="date" placeholder="消費日期"  onfocus="(this.type='date')">
            <select id="feedback_period" name="period"  placeholder="消費時段">
              <option value="1" >早上</option>
              <option value="2" >中午</option>
              <option value="3" >下午</option>
            </select>
            
            <input id="feedback_name" type="text" name="name" placeholder="聯絡人姓名 *" required>
            <select id="feedback_salutation" name="salutation">
              <option value="1" >先生</option>
              <option value="2" >小姐</option>
              <option value="3" >其他</option>
            </select>
            
            <input id="feedback_phone" type="number" name="phone" placeholder="聯絡電話 *" required>
            <input id="feedback_email" type="text" name="email" placeholder="Email">
          </div>
          <textarea id="feedback_suggestion" name="suggestion" id="" cols="30" rows="10" placeholder="建議內容 *" required style=" resize: none;"></textarea>
          
          <div class="btn">
            <button id="add_feedback_btn" type="button">送出</button>
          </div>
        </div>
      </form>
    </main>
    <footer id="footer">
      <div class="footer_content">
        <div class="logo_and_links">
          <a href="#" class="logo">
            <img src="./pics/logo.png" alt="logo" />
          </a href="#">
          <div class="links_group_wrapper">
            <ul class="links_group">
              <li class="link">
                <a href="#"> 顧客權益 </a>
              </li>
              <li class="link">
                <a href="#"> 聯絡我們 </a>
              </li>
              <li class="link">
                <a href="#"> 意見回饋 </a>
              </li>
              <li class="link">
                <a href="#"> FB粉絲專頁 </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="company_and_phone">
          <p>Copyright © 2022 歐巴斯複合式餐飲</p>
          <p>連絡電話:04 2285 4466</p>
        </div>
        <div class="go_to_top">
           <a href="#main">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 30px;">
                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M256 0C114.6 0 0 114.6 0 256c0 141.4 114.6 256 256 256s256-114.6 256-256C512 114.6 397.4 0 256 0zM382.6 254.6c-12.5 12.5-32.75 12.5-45.25 0L288 205.3V384c0 17.69-14.33 32-32 32s-32-14.31-32-32V205.3L174.6 254.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l103.1-103.1C241.3 97.4 251.1 96 256 96c4.881 0 14.65 1.391 22.65 9.398l103.1 103.1C395.1 221.9 395.1 242.1 382.6 254.6z"/>
            </svg>
           </a>
        </div>
      </div>
    </footer>

    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      const addFeedbackBtn = document.querySelector('#add_feedback_btn');

      const feedbackName = document.querySelector('#feedback_name');
      const feedbackPhone = document.querySelector('#feedback_phone');
      const feedbackEmail = document.querySelector('#feedback_email');
      const feedbackDate = document.querySelector('#feedback_date');
      const feedbackPeriod = document.querySelector('#feedback_period');
      const feedbackSuggestion = document.querySelector('#feedback_suggestion');
      const feedbackSalutation = document.querySelector('#feedback_salutation');

      addFeedbackBtn.onclick = ()=>{
        var formData = new FormData();
        formData.append('name',  feedbackName.value);
        formData.append('phone',  feedbackPhone.value);
        formData.append('email',  feedbackEmail.value);
        formData.append('date',  feedbackDate.value);
        formData.append('period',  feedbackPeriod.value);
        formData.append('suggestion',  feedbackSuggestion.value);
        formData.append('salutation',  feedbackSalutation.value);
        formData.append('_token',  '{!! csrf_token() !!}');

        fetch('/add_feedback',{
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .catch(error =>{
            alert('上傳失敗，請重新嘗試')
            return 'error';
        })
        .then(response => {
          // sweetAlert
          Swal.fire({
              title: '留言完成',
              icon: 'success',
              confirmButtonText: 'OK',
          })
        })
      }

    </script>

  </body>
</html>
