<footer>
    <section id="footer-link" class="ms-container">

       

        <nav class="nav-links">
            @foreach ($footers as $singleNav)
            <div class="nav-item">
                <h6 class="uppercase">{{ $singleNav['title'] }}</h6>
                <ul class="ms-pdg-bottom-16">
                    @foreach ($singleNav['links'] as $link)
                    <li>
                        <a href="#" alt="">{{ $link }}</a>
                    </li>
                    @endforeach
                </ul>                
            </div>
            @endforeach 
            
        </nav>
    
    
        <div class="img-container">
        </div>
        
    </section>
    
    <section id="footer-bottom" class="ms-container">
    
        <div class="footer-left">
            <button>SIGN-UP NOW!</button>
        </div>
    
        <div class="footer-right">
            <span>FOLLOW US</span>
    
            <div class="social-icon">
                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">                
            </div>
            <div class="social-icon">
                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">                
            </div>
            <div class="social-icon">
                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">                
            </div>
            <div class="social-icon">
                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">                
            </div>
            <div class="social-icon">
                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">                
            </div>
    
        </div>  
        
    </section>



</footer>