@extends('layouts.dashboard-layout')

@section('title', 'Pricing')

@section('content')

<style>
    .pricing-card {
        border: 1px solid #C6C8CA;
        background-color: #fff
    }
    .pricing-card .plan-select-button{
        font-weight: 600 !important;
    }
    .pricing-container{
        display: flex;
        justify-content: space-between !important;
    }
    .button-container-top{
        margin-top: 67px !important;
    }
    .pricing-card{
        max-width: 33% !important;
    }
    .pricing-container{
        gap: 30px !important;
    }
    .pricing-list-item{
        margin-top: 16px !important;
    }
    
    @media screen and (max-width: 992px) {
  .pricing-card{
        max-width: 49% !important;        
        min-height: 500px !important;
    }
     .pricing-container{
        display: flex;
        justify-content: center !important;
        gap: 10px !important;
    }
    
}
@media screen and (max-width: 600px) {
  .pricing-card{
        max-width: 100% !important;
    }
}
.active-package{
    text-align: center;
    font-size: 20px;
    font-weight: 600;
    font-family: 'Aptos', sans-serif !important;
    color: #fff;
    background: #85D6A5;
    width: max-content;
    padding: 10px 15px;
    border: 1px solid #85D6A5;
    border-radius: 45px;
    width: 100%;
    margin-bottom: 0;
}
</style>
<?php
use App\Models\WPUsers;

$wp_user = WPUsers::where('user_id', session('user_id'))->first();
$user_package = $wp_user->package;

?>
<div>
    <div>
         @if(Session::has('fail')) <p style="color:red;font-size:14px;"><?php echo Session::get('fail') ?></p>@endif
        @if(Session::has('success')) <p style="color:green;font-size:14px;"><?php echo Session::get('success') ?></p>@endif
        <h2 class="page-title">Pricing Package</h2>
        <p class="page-description" style="margin-bottom: 24px !important;">Overview of all pricing packages</p>
    </div>

    <div class="pricing-container pricing-new ">
        <!-- Card 1 -->
        <div class="card pricing-card" style="">
            <div class="card-body d-flex flex-column justify-content-between">
                <!-- Card Content -->
                <div>
                    <h5 class="text-center pricing-title">Decodemybrain Sneak Peak</h5>
                    <p class="text-center pricing-title-description" >
                       Unlock Strengths and Weaknesses
                    </p>
                    <h1 class="text-center price-plan">$FREE</h1>
                    <div class="text-center">
                        <div class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Basic brain blueprint - Mybraindesign®</span>
                        </div>
                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Unlock My Strengths</span>
                        </div>
                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Learn about the Brain</span>
                        </div>
                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Email support</span>
                        </div>
                    </div>
                </div>

                <!-- Button Container -->
                @if($user_package == 'free')
                <div class=" d-flex justify-content-center button-container-top">
                   <p class="active-package">Active</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card pricing-card">
            <div class="card-body d-flex flex-column justify-content-between">
                <!-- Card Content -->
                <div>
                    <h5 class="text-center pricing-title">Decodemybrain Deep Dive</h5>
                    <p class="text-center pricing-title-description">
                       Your Success Begins Here
                    </p>
                    <h1 class="text-center price-plan">$199</h1>
                    <div class="text-center">
                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Basic brain blueprint - Mybraindesign®</span>
                        </div>
                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Advanced brain blueprint - Mybraindesign® Advanced</span>
                        </div>

                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Unlock Future Choices</span>
                        </div>

                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Unlock Strengths & Weakness</span>
                        </div>
                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Brain connect- Match with 1 brain of your choice</span>
                        </div>
                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Flow & Grow - Holistic brain group coaching</span>
                        </div>
                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Email & call support for a year</span>
                        </div>
                         <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Eligibility For 1% Decodemybrain Club</span>
                        </div>
                    </div>
                </div>

                <!-- Button Container -->
               @if(session('sso_link') && in_array($user_package, ['decodemybrain-guided-friend-and-family-connect', 'free']))
                    <div class="d-flex justify-content-center button-container-top">
                        <a href="{{ session('sso_link') }}&path=https%3A%2F%2Fdecodemybrain.com%2Fcheckout%2F%3Fclear-cart%3D1%26add-to-cart%3D20724" 
                        target="_blank" 
                        class="w-100">
                            <button class="plan-select-button">Select Plan</button>
                        </a>
                    </div>
                @endif

                @if($user_package === 'decodemybrain-deep-dive')
                    <div class="d-flex justify-content-center button-container-top">
                        <p class="active-package">Active</p>
                    </div>
                @endif

            </div>
        </div>

        <!-- Card 3 -->
        <div class="card pricing-card">
            <div class="card-body d-flex flex-column justify-content-between">
                <!-- Card Content -->
                <div>
                    <h5 class="text-center pricing-title">Decodemybrain Guided Freind & Family Connect</h5>
                    <!--<p class="text-center pricing-title-description">-->
                    <!--    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.-->
                    <!--</p>-->
                    <h1 class="text-center price-plan">$499</h1>
                    <div class="text-center">
                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">All features of Decodemybrain deep dive +</span>
                        </div>
                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Advanced brain blueprint - Mybraindesign® Advanced</span>
                        </div>

                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Unlock Future Choices</span>
                        </div>

                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Unlock Strengths & Weakness</span>
                        </div>

                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Flow & Grow - Holistic brain group coaching</span>
                        </div>
                         <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Email & call support for a year</span>
                        </div>
                         <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Brain Connect ( Family maps) Preactivated for 2 matches</span>
                        </div>
                         <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">2 hours personalized detailed brain coaching</span>
                        </div>
                         <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Discounts for smart Neuro scan(If required)</span>
                        </div>
                        <div  class="pricing-list-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                    <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                            </span>
                            <span class="pricing-text">Eligibility for 1% Decodemybrain Club</span>
                        </div>


                    </div>
                </div>
                 @if(session('sso_link') && in_array($user_package, ['decodemybrain-deep-dive', 'free']))
                    <div class="d-flex justify-content-center button-container-top">
                        <a href="{{ session('sso_link') }}&path=https%3A%2F%2Fdecodemybrain.com%2Fcheckout%2F%3Fclear-cart%3D1%26add-to-cart%3D21020" 
                        target="_blank" 
                        class="w-100">
                            <button class="plan-select-button">Select Plan</button>
                        </a>
                    </div>
                @endif

                @if($user_package === 'decodemybrain-guided-friend-and-family-connect')
                    <div class="d-flex justify-content-center button-container-top">
                        <p class="active-package">Active</p>
                    </div>
                @endif
                <!-- Button Container -->
               
            </div>
        </div>
    </div>
</div>
@endsection
