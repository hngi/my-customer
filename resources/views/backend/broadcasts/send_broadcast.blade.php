
    @extends('layout.base')
    @section("custom_css")
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
     <link rel="stylesheet" href="/backend/assets/css/broadcasts.css">
    @stop
           @section('content')
            <div class="container">

              <div class="container-content">

                <div class='heading-container'>

                  <h2>
                    <i class="far fa-envelope"></i>
                    Broadcast Message
                  </h2>
                   
                  <div class="bg">
                    <div class="heading-content">
                      <div class="heading-container-text">
                        <div class="text">
                          <h2 style="color: #ffffff">Marketing</h2>
                          <p>Show your customers how much you care</p>
                        </div>
                      </div>

                      <div class="message-card">
                        <div class="message-card-text">
                          <h3>Happy New Year!</h3>
                          <p class="text2">Celebrate the new year with your customers</p>
                          <p class="text2">Send them a message</p>
                        </div>
                         
                        <div class="message-card-link">
                          <p>Send a Happy New Year wish</p>
                          <i class="fas fa-arrow-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="container-fluid">
                  <form action="">

                    <div class="search">
                      <input class="mainLoginInput"  type="search" placeholder="&#61442; Search Customer mail" style="font-family: Arial, 'Font Awesome 5 Free'">
                    </div>

                    <div>
                      <h4>Frequently Contacted</h4>
                    </div>
  
                    <div class="contacts">
                      
                    </div>
  
                    <div class="button-container">
                      <button type="button" class="buttons">
                        <i class="fas fa-paper-plane"></i>
                        Send a Message
                      </button><br>
                      <button type='button' class="buttons inverted"> Send Bulk Mail</button>
                    </div>
                  </form>
  
                </div>

              </div>

            </div>
              
            @endsection
    
    
        @section("javascript")
    
    
                    
        @stop