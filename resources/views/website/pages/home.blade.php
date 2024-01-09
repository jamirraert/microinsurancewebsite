@extends('website.layout.micro')

@section('content')
<div class='main_banner'>
    <div class="container">
        <div class="home_content_adjustment">
            <div class="home_left">
                <p>Protektado ang pamilya kapag kasama si CashKO!</p>
                <p>
                    CashKO is a solutions-first insurance provider that focuses on 
                    making microinsurance accessible to each and every Filipino family.
                </p>
                <a class="btn" href="#section_1">LEARN MORE</a>
            </div>
            <img src="{{ asset('images/microinsurance-banner-subject.png') }}" class="main_subject">
        </div>
    </div>
</div>
<div class='section_1' id='section_1'>
    <div class="container">
        <div>
            <p>
                FOR OUR CUSTOMERS
            </p>
            <p>
                Sa hirap at ginhawa, kaagapay ko si CashKO!
            </p>
        </div>
    </div>
</div>
<div class='section_2'>
    <div class="container">
        <div>
            <div>
                <img src="{{ asset('images/hand-abot-kaya.png') }}" class="hand-abot-kaya">
                <p>
                    Kumpletong proteksyon sa halagang abot-kaya
                </p>
                <p>
                    Plans can begin for as low as P10 for 1 month. 
                    Whatever your needs are, we’ll come up with an 
                    insurance policy that you can afford without 
                    compromising on protecting the ones you love most.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/hand-kailangan.png') }}" class="hand-kailangan">
                <p>
                    Kasama mo kahit kailan
                </p>
                <p>
                    CashKO’s microinsurance plans protects from death 
                    and losses caused by disasters, health concerns, 
                    and accidents. No matter what happens, CashKO has 
                    your family covered. 
                </p>
            </div>
            <div>
                <img src="{{ asset('images/hand-malasakit.png') }}" class="hand-malasakit">
                <p>
                    Serbisyong may malasakit
                </p>
                <p>
                    Our clients-first, proactive approach means 
                    that you can contact our insurance team for 
                    any questions you may have about filing 
                    claims or checking your current policy. 
                </p>
            </div>
        </div>
    </div>
</div>
<div class='section_3'>
    <div class="container">
        <div class="adjust">
            <div>
                <p>Need help with your policies or claims?</p>
                <button class="btn_blue" onclick="scrollToSection('home_footer_banner')">CONTACT US</button>
            </div>
        </div>
    </div>
</div>
<div class='section_4'>
    <div class="container">
        <div class="adjust_4">
            <div>
                <img src="{{ asset('images/CashKO_Accent-4.png') }}" class="hand-circle">
                <p>CashKO has helped protect over 1 million low-income Filipino households.</p>
                <p>2,058 claims approved YRD as of June 2023</p>
            </div>
            <img src="{{ asset('images/banner-bg-ok.png') }}" class="hand-ok">
        </div>
    </div>
</div>    
<div class='section_5' id='section_5'>
    <div class="container">
        <div class="adjust_5">
           <p>
                FOR OUR PARTNER FINANCIAL INSTITUTIONS
           </p>
           <p>
                Sa paguunlad, <br/> kakampi ko si CashKO!
           </p>
           <p>
                We partner with financial institutions that cater to 
                underserved Filipinos in an effort to give all Filipinos 
                the financial safety net that they need.
           </p>
        </div>
    </div>
</div>
<div class='section_6'>
    <div class="container">
        <div>
            <div>
                <img src="{{ asset('images/hand-dekalidad.png') }}" class="hand-dekalidad">
                <p>
                    Solusyong de-kalidad
                </p>
                <p>
                    CashKO’s end-to-end digital platform reduces the overhead costs of 
                    selling insurance without compromising the safety of you and your clients. 
                </p>
            </div>
            <div>
                <img src="{{ asset('images/hand-sukat.png') }}" class="hand-sukat">
                <p>
                    Solusyong sukat
                </p>
                <p>
                    CashKO works closely with your business to market and cross-sell 
                    microinsurance plans. Our programs, which are made-to-measure 
                    according to what your community needs, can generate additional 
                    revenue for every active client under your branch. 
                </p>
            </div>
            <div>
                <img src="{{ asset('images/hand-maypuso.png') }}" class="hand-maypuso">
                <p>
                    Solusyong may puso
                </p>
                <p>
                    CashKO seeks to provide sustainable financial security for 
                    underserved Filipinos through microinsurance. We are proactive 
                    about maintaining a high claims approval rate and fast turnaround 
                    times to better serve customers.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="home_faq" id='home_faq'>
    <div class="container">
        <div id="left">
            <p>FAQs</p> 
            <p>Learn more about CashKO and what we offer.</p>   
        </div>  
        <div id="right">
                
            <!-- Accordion -->
             <div class="accordion">

                <!-- Accordion Item 1 -->
                <div class="accordion-item" id="accordion-item">
                    <div>
                        <p>Who is CashKO?</p>
                        <div>
                            <i class='bx bx-chevron-up'></i>
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </div>   
                    <div id="accordion-content" class="accordion-content">
                        CashKO is the first fully digital insurance brokerage in the Philippines that 
                        provides accessible insurance products. We work with financial and retail 
                        institutions to provide all Filipinos with affordable microinsurance policies.
                        <br /><br />
                        Optional call to action: You may learn more about us and our services <a href="http://cashko-insurance.com">here</a>.
                    </div>
                </div>
        
                <!-- Accordion Item 2 -->
                <div class="accordion-item" id="accordion-item">
                    <div>
                        <p>What are microinsurance plans?</p>
                        <div>
                            <i class='bx bx-chevron-up'></i>
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </div>
                    <div id="accordion-content" class="accordion-content">
                        Microinsurance plans are affordable protection plans that can help families in need deal 
                        with the financial shocks brought about by difficult life events such as death, accidents, 
                        sicknesses, or damage to property.
                    </div>
                </div>
        
                <!-- Accordion Item 3 -->
                <div class="accordion-item" id="accordion-item">
                    <div>
                        <p>How do I make a claim?</p>
                        <div>
                            <i class='bx bx-chevron-up'></i>
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </div>
                    <div id="accordion-content" class="accordion-content">
                        Claims can be made at your plan’s home financial institution, or the place where 
                        you purchased the plan. Alternatively, you may contact CashKO’s customer service using 
                        the details below. We are always ready to help you with your claims.  
                    </div>
                </div>
        
                <!-- Accordion Item 4 -->
                <div class="accordion-item" id="accordion-item">
                    <div>
                        <p>How do I partner with CashKO to create microinsurance plans?</p>
                        <div>
                            <i class='bx bx-chevron-up'></i>
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </div>
                    <div id="accordion-content" class="accordion-content">
                        We customize all of our plans to fit the needs and budgets of our partners. If you have clients in 
                        need of affordable protection, CashKO’s Partnership team can help you build a solution that’s right for you. 
                        Schedule an appointment now through our Contact Us page.
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                let accordionItems = document.querySelectorAll('#accordion-item');
                let currentlyOpenItem = null;

                accordionItems.forEach(function(element) {
                    element.querySelector('#accordion-content').style.display = 'none';

                    element.addEventListener('click', function(event) {
                        event.stopPropagation();

                        let accordionContent = this.querySelector('#accordion-content');
                        let chevUp = this.querySelector('.bx-chevron-up');
                        let chevDown = this.querySelector('.bx-chevron-down');

                        if (currentlyOpenItem && currentlyOpenItem !== this) {
                            // Close the previously open item
                            let prevAccordionContent = currentlyOpenItem.querySelector('#accordion-content');
                            let prevChevUp = currentlyOpenItem.querySelector('.bx-chevron-up');
                            let prevChevDown = currentlyOpenItem.querySelector('.bx-chevron-down');

                            prevAccordionContent.style.display = 'none';
                            prevChevUp.style.display = 'none';
                            prevChevDown.style.display = 'block';
                        }

                        if (accordionContent.style.display === 'none') {
                            accordionContent.style.display = 'block';
                            chevUp.style.display = 'block';
                            chevDown.style.display = 'none';
                            currentlyOpenItem = this;
                        } else {
                            accordionContent.style.display = 'none';
                            chevUp.style.display = 'none';
                            chevDown.style.display = 'block';
                            currentlyOpenItem = null;
                        }
                    });
                });

                // hide content when clicking outside element
                document.addEventListener('click', function(event) {
                    const target = event.target;

                    if (!Array.from(accordionItems).some(item => item.contains(target))) {
                        accordionItems.forEach(function(element) {
                            let accordionContent = element.querySelector('#accordion-content');
                            let chevUp = element.querySelector('.bx-chevron-up');
                            let chevDown = element.querySelector('.bx-chevron-down');

                            accordionContent.style.display = 'none';
                            chevUp.style.display = 'none';
                            chevDown.style.display = 'block';
                        });

                        currentlyOpenItem = null;
                    }
                });
            });

            </script>
        </div>
    </div>
</div>


{{-- <div class='home_footer_banner' id='home_footer_banner'>
    <div class="container">
        <div class="container_adjustment">
            <div>
                <div>
                    <p>Our CashKO agents are always available to walk you through our microinsurance process.</p>
                    <img src="{{ asset('images/CashKO_Accent-2.png') }}" class="img-always" />
                </div>
                <div>
                    <p>Contact us today for a 15-minute consultation where we’ll help you determine a CashKO plan that works best for you.</p>
                    <img src="{{ asset('images/cashko-hand-blue-transparent.png') }}" class="img-ok" />
                </div>
            </div>
            <div>
                <table>
                    <tr>
                        <td class="td-label">Email:</td>
                        <td class="td-content">support@ruralnet.ph</td>
                    </tr>

                    <tr>
                        <td class="td-label">Toll-Free:</td>
                        <td class="td-content">1800 1320 0211</td>
                    </tr>

                    <tr>
                        <td class="td-label">Globe:</td>
                        <td class="td-content">&nbsp;(028) 876 1428</td>
                    </tr>

                    <tr>
                        <td class="td-label">PLDT:</td>
                        <td class="td-content">&nbsp;(032) 342 7826</td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="td-label">Address:</td>
                        <td class="td-content"><p>2F, RuralNet, Inc., 1830 South Building, Arcenas Estate, Brgy. Labangon, Cebu City, Cebu</p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div> --}}

<div class="footer_banner">
   <div class="container">
    <div class="footer_banner_inner">

        <div class="footer_banner_inner_desc">
            <h1>Our Cashko agents are always available to walk you through our microinsurance process</h1>
            <p>Contact us today for a 15-minute consultation where we'll help you determine a CashKO plan that works best for you</p>
            <img src="{{ asset('images/CashKO_Accent-2.png') }}" class="footer_banner_inner_desc_img1" />
            <img src="{{ asset('images/cashko-hand-blue-transparent.png') }}" class="footer_banner_inner_desc_img2" />
        </div>
        <div class="footer_banner_inner_contact">
            <p>Email:</p>
            <p style="color: rgb(255,255,255)">support@ruralnet.ph</p>
            <p>Toll-Free:</p>
            <p style="color: rgb(255,255,255)">1800 1320 0211Test</p>
            <p>Globe:</p>
            <p style="color: rgb(255,255,255)">(028) 876 1428Test</p>
            <p>PLDT:</p>
            <p style="color: rgb(255,255,255)">(032) 342 7826Test</p>
            <p>Address:Test</p>
            <p class="footer_banner_inner_contact_address">2F, RuralNet, Inc., 1830 South Building, Arcenas Estate, Brgy. Labangon, Cebu City Cebu</p>
            {{-- <table>
                <tbody>
                    <tr>
                        <td>Email:</td>
                        <td><p>support@ruralnet.ph</p></td>
                    </tr>
                    <tr>
                        <td>Toll-Free:</td>
                        <td><span>1800 1320 0211</span></td>
                    </tr>
                    <tr>
                        <td>Globe:</td>
                        <td><span>(028) 876 1428</span></td>
                    </tr>
                    <tr>
                        <td>PLDT:</td>
                        <td><p>(032) 342 7826</p></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><p class="footer_banner_inner_contact_address">2F, RuralNet, Inc., 1830 South Building, Arcenas Estate, Brgy. Labangon, Cebu City Cebu</p></td>
                    </tr>
    
                </tbody>
            </table> --}}
        </div>

    </div>
   </div>
</div>
<script>
    function scrollToSection(id) {
    var targetSection = document.getElementById(id);

    if (targetSection && !window.location.hash.includes(id)) {
        // Update the URL fragment without triggering a scroll
        history.replaceState(null, null, '#' + id);

        targetSection.scrollIntoView({
            behavior: 'smooth'
        });
    }
}
</script>
@endsection