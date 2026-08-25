@extends('layouts.app', [
    'title' => 'FAQ - Educavo',
    'variant' => 'inner',
])

@section('content')
<div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Faq</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Faq Us</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <div class="rs-faq-part orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                 <div class="container">
                     <div class="content-part mb-50 md-mb-30">
                         <div class="title mb-40 md-mb-15">
                             <h3 class="text-part">Kindergarten</h3>
                         </div>
                         <div id="accordion" class="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" area-expanded="true">What do you mean by item and end product?</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                    <div class="card-body">
                                     Aenean massa. Cum sociis natoque penatibus et magnis dis partu rient to montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellen of the tesque services Donec quam felis, ultricies nec, pellentesque eu, pretium quis,pede justo, of fringilla vel, aliquet nec
                                    </div>
                                </div>
                            </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" href="#" aria-expanded="false">What does non-exclusive mean?</a>
                                 </div>
                                 <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                     <div class="card-body">
                                         Aenean massa. Cum sociis natoque penatibus et magnis dis partu rient to montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellen of the tesque services Donec quam felis, ultricies nec, pellentesque eu, pretium quis,pede justo, of fringilla vel, aliquet nec
                                     </div>
                                 </div>
                             </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">What are some examples of permitted end products?</a>
                                 </div>
                                 <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                     <div class="card-body">
                                         Aenean massa. Cum sociis natoque penatibus et magnis dis partu rient to montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellen of the tesque services Donec quam felis, ultricies nec, pellentesque eu, pretium quis,pede justo, of fringilla vel, aliquet nec.
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="content-part mb-50 md-mb-30">
                         <div class="title mb-40 md-mb-15">
                             <h3 class="text-part">Primary School</h3>
                         </div>
                         <div id="accordion2" class="accordion">
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false">What if I have an emergency?</a>
                                 </div>
                                 <div id="collapseFour" class="collapse" data-bs-parent="#accordion2">
                                     <div class="card-body">
                                         Hematology, also spelled haematology, is the branch of medicine concerned with the study of the cause, prognosis, treatment, and prevention of diseases related to blood. It involves treating diseases that affect the production of blood and its components, such as blood cells, hemoglobin, blood proteins, bone marrow, platelets, blood vessels, spleen, and the mechanism of coagulation.
                                     </div>
                                 </div>
                             </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="tue">What if my regular doctor is unavailable?</a>
                                 </div>
                                 <div id="collapseFive" class="collapse show" data-bs-parent="#accordion2">
                                     <div class="card-body">
                                      Hematology, also spelled haematology, is the branch of medicine concerned with the study of the cause, prognosis, treatment, and prevention of diseases related to blood. It involves treating diseases that affect the production of blood and its components, such as blood cells, hemoglobin, blood proteins, bone marrow, platelets, blood vessels, spleen, and the mechanism of coagulation.
                                     </div>
                                 </div>
                             </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"> What should I bring to my first appointment?</a>
                                 </div>
                                 <div id="collapseSix" class="collapse" data-bs-parent="#accordion2">
                                     <div class="card-body">
                                         Hematology, also spelled haematology, is the branch of medicine concerned with the study of the cause, prognosis, treatment, and prevention of diseases related to blood. It involves treating diseases that affect the production of blood and its components, such as blood cells, hemoglobin, blood proteins, bone marrow, platelets, blood vessels, spleen, and the mechanism of coagulation.
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="content-part mb-50 md-mb-30">
                         <div class="title mb-40 md-mb-15">
                             <h3 class="text-part">High School</h3>
                         </div>
                         <div id="accordion3" class="accordion">
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false">How does the normal heart work?</a>
                                 </div>
                                 <div id="collapseSeven" class="collapse" data-bs-parent="#accordion3">
                                     <div class="card-body">
                                         The normal heart is composed of four chambers. The two upper chambers (called atriums or atria) are reservoirs which collect blood as it flows back to the heart. From the atriums, blood flows into the lower two chambers (called ventricles) which pump blood, with each heart beat, into the main arteries.
                                     </div>
                                 </div>
                             </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true">What are the heart valves?</a>
                                 </div>
                                 <div id="collapseEight" class="collapse show" data-bs-parent="#accordion3">
                                     <div class="card-body">
                                     The normal heart is composed of four chambers. The two upper chambers (called atriums or atria) are reservoirs which collect blood as it flows back to the heart. From the atriums, blood flows into the lower two chambers (called ventricles) which pump blood, with each heart beat, into the main arteries.
                                     </div>
                                 </div>
                             </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="collapsed card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false">Can a child acquire a heart problem?</a>
                                 </div>
                                 <div id="collapseNine" class="collapse" data-bs-parent="#accordion3">
                                     <div class="card-body">
                                         The normal heart is composed of four chambers. The two upper chambers (called atriums or atria) are reservoirs which collect blood as it flows back to the heart. From the atriums, blood flows into the lower two chambers (called ventricles) which pump blood, with each heart beat, into the main arteries.
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="content-part">
                         <div class="title mb-40 md-mb-15">
                             <h3 class="text-part"> College/University</h3>
                         </div>
                         <div id="accordion4" class="accordion">
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true">What is Education?</a>
                                 </div>
                                 <div id="collapseTen" class="collapse show" data-bs-parent="#accordion4">
                                     <div class="card-body">
                                         Orthopedics (alternatively, orthopaedics) is a specialty focused on the diagnosis and treatment of conditions, disorders, diseases and injuries of the muscles, bones, joints, tendons, ligaments, and nerves.
                                     </div>
                                 </div>
                             </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="collapsed card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false"> What is the difference between a sprain and a fracture?</a>
                                 </div>
                                 <div id="collapseEleven" class="collapse" data-bs-parent="#accordion4">
                                     <div class="card-body">
                                     The normal heart is composed of four chambers. The two upper chambers (called atriums or atria) are reservoirs which collect blood as it flows back to the heart. From the atriums, blood flows into the lower two chambers (called ventricles) which pump blood, with each heart beat, into the main arteries.
                                     </div>
                                 </div>
                             </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="collapsed card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false"> What is an Advanced Practitioner?</a>
                                 </div>
                                 <div id="collapseTwelve" class="collapse" data-bs-parent="#accordion4">
                                     <div class="card-body">
                                         The normal heart is composed of four chambers. The two upper chambers (called atriums or atria) are reservoirs which collect blood as it flows back to the heart. From the atriums, blood flows into the lower two chambers (called ventricles) which pump blood, with each heart beat, into the main arteries.
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
            </div>

            
            <!-- Newsletter section start -->
            <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
                <div class="container">
                    <div class="newsletter-wrap">
                        <div class="row y-middle">
                            <div class="col-lg-6 col-md-12 md-mb-30">
                               <div class="content-part">
                                   <div class="sec-title">
                                       <div class="title-icon md-mb-15">
                                           <img src="{{ asset('assets/images/newsletter.png') }}" alt="images">
                                       </div>
                                       <h2 class="title mb-0 white-color">Subscribe to Newsletter</h2>
                                   </div>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <form class="newsletter-form">
                                    <input type="email" name="email" placeholder="Enter Your Email" required="">
                                    <button type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter section end -->
            
        </div>
@endsection
