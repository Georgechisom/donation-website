@extends('layouts.app')
@section('content')
    
  {{-- intro --}}
<div class="w-full mt-32 md:mt-36 overflow-hidden bigaboutus">
  <div class="container mx-auto py-20 text-white text-center h-auto">
    <p class="text-base md:text-lg py-20 font-semibold">
      Our humanitarian efforts focus on providing critical aid, including relief supplies and logistical supports, to vulnerable people. We prioritize assisting those most in need, such as the homeless, refugees, and individuals affected by natural disasters, wars, and famines. At the heart of our mission is a commitment to saving lives, reducing suffering, and upholding human dignity.
    </p>
  </div>
</div>

{{-- true projects --}}
<div class="bg-white w-full overflow-hidden">
  <div class="container mx-auto  my-20 pb-10">
    <H2 class="capitalize text-center font-bold text-2xl md:text-4xl pt-20">
      Our true projects
    </H2>
    <h3 class="text-center font-semibold text-base py-4 px-2"><b class="text-skyText">Divineone community</b> initiatives span a diverse range of sectors, including education, healthcare, agriculture and real estate</h3>
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start justify-center gap-y-4 lg:gap-y-0 gap-x-0 lg:gap-x-8 py-8 px-4">
      <div class="flex flex-col justify-center w-full">
        <div class="font-bold flex flex-row justify-center py-4 gap-x-2 lg:gap-x-4">
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
            <h2 class="text-center font-bold text-lg md:text-xl -mt-4 uppercase">Education</h2>
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
        </div>
        <p>
          Our empowering educational project is essential for reducing illiteracy and hardship in local Community, this initiative provides tuition, books, and mentorship program to underprivileged children, assisting more than 1,000 students in realizing their academic dreams. <br>
          We also prioritize proper training for teachers, encourage extracurricular activities, foster community engagement, mobilize resources across all regions, and conduct monitoring and evaluation of educational development in individuals.
        </p>
      </div>

      <div class="overflow-hidden effshad">
        <img src="{{ asset("images/childeducationnew.png") }}" alt="project1" class="object-cover w-full rounded-lg projectshadow">
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start justify-center gap-y-4 lg:gap-y-0 gap-x-0 lg:gap-x-8 py-8 px-4">
      <div class="overflow-hidden hidden lg:flex effshad">
        <img src="{{ asset("images/cleanwater.png") }}" alt="project2" class="object-cover w-full rounded-lg projectshadow">
      </div>

      <div class="flex flex-col justify-center w-full">
        <div class="font-bold flex flex-row justify-center py-4 gap-x-2 lg:gap-x-4">
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
            <h2 class="text-center font-bold text-lg md:text-xl -mt-4 uppercase">Water Initiative</h2>
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
        </div>
        <p>
          Access to clean water promotes improved health. The Clean Water Initiative is a project led by our community focused on ensuring access to safe drinking water for communities in need. Acknowledging that access to clean water is a fundamental human right and essential for health, education, and economic progress, this initiative aims to tackle the urgent need of water scarcity and contamination that affect at-risk communities.
          <br>
          Divineone communtiy have constructed and rehabilitated over 150 water supply systems, including boreholes and rainwater harvesting systems, to ensure dependable access to clean water. We conduct regular testing and monitoring of water sources to guarantee safety. We educate the community on the significance of clean water, hygiene practices, and water conservation through workshops and outreach initiatives. Additionally, we advocate for the use of environmentally friendly technologies and methods, such as solar-powered water pumps and filtration systems, to empower individuals and families, fostering resilience and encouraging long-term sustainable development for future generations.
        </p>
      </div>

      <div class="overflow-hidden flex lg:hidden effshad">
        <img src="{{ asset("images/cleanwater.png") }}" alt="project2" class="object-cover w-full rounded-lg projectshadow">
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start justify-center gap-y-4 lg:gap-y-0 gap-x-0 lg:gap-x-8 py-8 px-4">
      <div class="flex flex-col justify-center w-full">
        <div class="font-bold flex flex-row justify-center py-4 gap-x-2 lg:gap-x-4">
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
            <h2 class="text-center font-bold text-lg md:text-xl -mt-4 uppercase">Neonatal Care</h2>
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
        </div>
        <p>
          The Neonatal Care is a comprehensive program aimed at enhancing health outcomes for infants in underprivileged areas. Acknowledging that the initial 28 days of life are vital for both survival and growth, our project seeks to offer crucial medical attention, education, and assistance to guarantee that every newborn receives a healthy beginning. <br>
          Infant mortality has been a longstanding issue since the 2000s, but the Divineone community's introduction of technological innovations, better comprehension of newborn  physiology, improved sanitation methods, and establishment of specialized neonatal intensive care units have resulted in a notable decrease in infant mortality rates. <br>
          Our neonatal care represents an essential commitment to the future of our communities. By prioritizing the health and welfare of newborns, we can greatly enhance their chances of survival and development, leading to healthier future generations. This care initiative not only meets urgent health requirements but also cultivates a culture of care and assistance for families, guaranteeing that every child has the chance to flourish.
        </p>
      </div>

      <div class="overflow-hidden effshad">
        <img src="{{ asset("images/projet1.jpg") }}" alt="project3" class="object-cover w-full rounded-lg projectshadow">
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start justify-center gap-y-4 lg:gap-y-0 gap-x-0 lg:gap-x-8 py-8 px-4">
      <div class="overflow-hidden hidden lg:flex effshad">
        <img src="{{ asset("images/foodbank.png") }}" alt="project4" class="object-cover w-full rounded-lg projectshadow">
      </div>

      <div class="flex flex-col justify-center w-full">
        <div class="font-bold flex flex-row justify-center py-4 gap-x-2 lg:gap-x-4">
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
            <h2 class="text-center font-bold text-lg md:text-xl -mt-4 uppercase">Food Program</h2>
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
        </div>
        <p>
          Divineone communtiy food bank program is an essential initiative designed to combat food insecurity and enhance nutritional health for marginalized groups. By offering access to healthy food and critical resources, this program aims to assist individuals and families experiencing economic hardships, ensuring that everyone in the community has the opportunity to avoid hunger. <br>
          The Food Bank Program represents an advancement in building a healthier and more resilient community. By tackling food insecurity and encouraging nutritional education, we have enable individuals and families to flourish, which in turn enhances the community's overall well-being. This prject offers not just immediate assistance but also establishes the foundation for enduring solutions to hunger and poverty, nurturing a sense of hope for everyone.
        </p>
      </div>

      <div class="overflow-hidden flex lg:hidden effshad">
        <img src="{{ asset("images/foodbank.png") }}" alt="project4" class="object-cover w-full rounded-lg projectshadow">
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start justify-center gap-y-4 lg:gap-y-0 gap-x-0 lg:gap-x-8 py-8 px-4">
      <div class="flex flex-col justify-center w-full">
        <div class="font-bold flex flex-row justify-center py-4 gap-x-2 lg:gap-x-4">
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
            <h2 class="text-center font-bold text-lg md:text-xl -mt-4 uppercase">Maternal Project</h2>
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
        </div>
        <p>
          Divineone community has established obstetrical care centers and offered education and resources to women to ensure they can access medical, nursing, and health-related services. From 2020 to 2024, the global maternal mortality rate has decreased by approximately 44%, reflecting an annual decline of roughly 2.3 percent.
        </p>
      </div>

      <div class="overflow-hidden effshad">
        <img src="{{ asset("images/projet.jpg") }}" alt="project5" class="object-cover w-full rounded-lg projectshadow">
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start justify-center gap-y-4 lg:gap-y-0 gap-x-0 lg:gap-x-8 py-8 px-4">
      <div class="overflow-hidden hidden lg:flex effshad">
        <img src="{{ asset("images/wheels.jpg") }}" alt="project6" class="object-cover w-full rounded-lg projectshadow">
      </div>

      <div class="flex flex-col justify-center w-full">
        <div class="font-bold flex flex-row justify-center py-4 gap-x-2 lg:gap-x-4">
            <hr class="w-2 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
            <h2 class="text-center font-bold text-base md:text-xl -mt-4 uppercase">Wheelchair Donation</h2>
            <hr class="w-2 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
        </div>
        <p>
          The Wheelchair donation initiative is a compassionate program dedicated to providing wheelchairs to individuals with mobility challenges, particularly in rural communities We distribute wheelchairs to individuals in need, particularly the elderly, disabled, and those recovering from injuries, to improve their mobility and access to essential services. we also provide information and resources on mobility aids, rehabilitation services, and community support networks to empower recipients. <br>
          This project has delivered wheelchairs and mobility aids to over 250 individuals with disabilties, by providing wheelchairs to those in need, we not only enhance their physical mobility but also promote their social inclusion and overall well-being. This initiative embodies the spirit of compassion and community support, ensuring that everyone has the opportunity to lead a fulfilling and active life. Together, we can make a significant difference in the lives of individuals facing mobility challenges, fostering a more inclusive and equitable society.

        </p>
      </div>

      <div class="overflow-hidden flex lg:hidden effshad">
        <img src="{{ asset("images/wheels.jpg") }}" alt="project6" class="object-cover w-full rounded-lg projectshadow">
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start justify-center gap-y-4 lg:gap-y-0 gap-x-0 lg:gap-x-8 py-8 px-4">
      <div class="flex flex-col justify-center w-full">
        <div class="font-bold flex flex-row justify-center py-4 gap-x-2 lg:gap-x-4">
          <hr class="w-2 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
          <h2 class="text-center font-bold text-base md:text-xl -mt-4 uppercase">Women empowerment</h2>
          <hr class="w-2 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
        </div>
        <p>
          Empowering women empowers communities. This program offers agriculture and vocational training and skills, microloans to over 300 women, enabling them to achieve financial independence and lead their families to better futures <br>
          Divineone community women empowerment program is a vital step toward achieving gender equality and enabling women to take control of their futures. By offering education, resources, and support, we assist women in overcoming obstacles and realizing their potential, ultimately leading to stronger and more resilient communities. This program not only changes the lives of individual women but also lays the foundation for future generations, nurturing a culture of empowerment, equality, and opportunity for everyone. Together, we can build a world where every woman has the opportunity to succeed and lead.
        </p>
      </div>

      <div class="overflow-hidden effshad">
        <img src="{{ asset("images/womanempower.png") }}" alt="project7" class="object-cover w-full rounded-lg projectshadow">
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start justify-center gap-y-4 lg:gap-y-0 gap-x-0 lg:gap-x-8 py-8 px-4">
      <div class="overflow-hidden hidden lg:flex effshad">
        <img src="{{ asset("images/medicalpersons.JPG") }}" alt="project8" class="object-cover w-full rounded-lg projectshadow">
      </div>

      <div class="flex flex-col justify-center w-full">
        <div class="font-bold flex flex-row justify-center py-4 gap-x-2 lg:gap-x-4">
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
            <h2 class="text-center font-bold text-lg md:text-xl -mt-4 uppercase">Community Health</h2>
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
        </div>
        <p>
          Good health is a fundamental right. Our health drives provide free medical checkups, treatments and medications to rural areas, impacting over 1200 lives. <br>
          Our Community Health Initiative helps us build a healthier, more resilient community. we solve health disparities and promote wellness, we empower individuals to take charge of their health and well-being. This initiative not only aims to improve immediate health outcomes but also fosters a routine of prevention and proactive health management, ensuring that all community members have the opportunity to live healthy, fulfilling lives. Together, we are creating a supportive environment that prioritizes health and well-being for everyone.
        </p>
      </div>

      <div class="overflow-hidden flex lg:hidden effshad">
        <img src="{{ asset("images/medicalpersons.JPG") }}" alt="project8" class="object-cover w-full rounded-lg projectshadow">
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start justify-center gap-y-4 lg:gap-y-0 gap-x-0 lg:gap-x-8 py-8 px-4">
      <div class="flex flex-col justify-center w-full">
        <div class="font-bold flex flex-row justify-center py-4 gap-x-2 lg:gap-x-4">
          <hr class="w-2 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
          <h2 class="text-center font-bold text-base md:text-xl -mt-4 uppercase">Home of Comfort</h2>
          <hr class="w-2 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
        </div>
        <p>
          A secure home is our priority for a better life. this initiative have built homes for over 50 families living in extreme poverty, providing them with safety and stabilty <br>
          Divineone community tackles the problem of housing insecurity in these communities. By providing safe and stable homes, we improve the lives of individuals and families and also contribute to the overall health and resilience of the community. we embodies the belief that everyone deserves a place to call home, and through collaboration, compassion, and commitment, we have build a lasting change that uplifts the most vulnerable among us. Together.
        </p>
      </div>

      <div class="overflow-hidden effshad">
        <img src="{{ asset("images/massivebed.JPG") }}" alt="project9" class="object-cover w-full rounded-lg projectshadow">
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start justify-center gap-y-4 lg:gap-y-0 gap-x-0 lg:gap-x-8 py-8 px-4">
      <div class="overflow-hidden hidden lg:flex effshad">
        <img src="{{ asset("images/mancloth.jpg") }}" alt="project10" class="object-cover w-full rounded-lg projectshadow">
      </div>
      <div class="flex flex-col justify-center w-full">
        <div class="font-bold flex flex-row justify-center py-4 gap-x-2 lg:gap-x-4">
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
            <h2 class="text-center font-bold text-lg md:text-xl -mt-4 uppercase">Emergency relief</h2>
            <hr class="w-5 md:w-52 lg:w-24" style="color: black; font-weight: bolder; border: 1.5px solid black;">
        </div>
        <p>
          Divineone community emergency relief program is a rapid response initiative designed to provide immediate assistance to individuals and communities affected by natural disasters, humanitarian crises, and other emergencies. Recognizing the urgent need for support during times of crisis, this program aims to deliver essential resources, services, and support to help affected populations recover and rebuild their lives.
          <br>
            We provide essential supplies such as food, clean water, medical care, clothing, and shelter to individuals and families impacted by emergencies. we offer mental health services and counseling to help individuals cope with trauma and stress resulting from crises. Our team develop strategies for long-term recovery and resilience, including rebuilding infrastructure, restoring livelihoods, and providing ongoing support to affected communities.
          
        </p>
      </div>

      <div class="overflow-hidden flex lg:hidden effshad">
        <img src="{{ asset("images/mancloth.jpg") }}" alt="project10" class="object-cover w-full rounded-lg projectshadow">
      </div>
    </div>

  </div>
</div>

{{-- testimonials --}}
<div class="container mx-auto my-20 text-center overflow-hidden">
  <div class="text-2xl md:text-3xl capitalize font-bold my-5 text-center">Our testimonials</div>
  <div class="my-6 px-2 md:px-0">
    <div id="owl-two" class="owl-carousel owl-theme gap-x-2 md:gap-x-4 cursor-pointer">
      <div class="item overflow-hidden w-full">
        <div class="shadow-effect py-4 px-2 ">
          <p class="text-sm md:text-base py-4 px-4 mb-2 text-black">
            I can't express how grateful I am for the support I received from the food bank program. As a single mother of two, I was struggling to make ends meet after losing my job. The food bank provided not only nutritious food for my family but also a sense of hope during a very difficult time. The volunteers were incredibly kind and understanding, and they helped me feel less alone in my struggle. Thank you for making such a difference in our lives!
          </p>
          <div class="testimonial-name">Joy Evelyn</div>
        </div>
      </div>
      <div class="item overflow-hidden w-full">
        <div class="shadow-effect py-4 px-2 ">
          <p class="text-sm md:text-base py-4 px-4 mb-2 text-black">
            I am incredibly thankful for the wheelchair I received through the divineone community donation program. After my accident, I felt trapped and dependent on others for everything. The wheelchair has given me back my independence and the ability to move around my home and community. It has made a world of difference in my daily life. I can now participate in activities I thought I would never be able to do again. This gift has not only improved my mobility but also my spirit. Thank you for your generosity and for believing in people like me
          </p>
          <div class="testimonial-name">Raymond John</div>
        </div>
      </div>
      <div class="item overflow-hidden w-full">
        <div class="shadow-effect py-4 px-2 ">
          <p class="text-sm md:text-base py-4 px-4 mb-2 text-black">
            Thank you Divineone Community for the support my daughter received through the fund a child education donation. When we struggled to afford school supplies and books, I worried about her future. Thanks to the donations, she now has the resources she needs to succeed in school. The program not only provided her with essential materials but also inspired her to dream big. She is more confident and excited about learning, and I can see her potential growing every day. This support has truly changed our lives, and I can't thank you enough for investing in our children's education
          </p>
          <div class="testimonial-name">Fatima Usman</div>
        </div>
      </div>
      <div class="item overflow-hidden w-full">
        <div class="shadow-effect py-4 px-2 ">
          <p class="text-sm md:text-base py-4 px-4 mb-2 text-black">
            I cannot express how life-changing the clean water initiative has been for my family and me. Before this program, we had to walk miles to collect water that was often contaminated. It was a daily struggle that affected our health and well-being. Now, with access to clean, safe water right in our community, we no longer worry about waterborne diseases. My children are healthier, and I have more time to focus on work and education. This initiative has brought us hope and a better quality of life. Thank you for making such a significant difference in our community
          </p>
          <div class="testimonial-name">Caleb Moore</div>
        </div>
      </div>
      <div class="item overflow-hidden w-full">
        <div class="shadow-effect py-4 px-2 ">
          <p class="text-sm md:text-base py-4 px-4 mb-2 text-black">
            Thank you for the neonatal care program that supported me and my newborn during a challenging time. After my baby was born prematurely, I was overwhelmed with worry and fear. The nurses and staff provided not only expert medical care but also emotional support that made all the difference. They educated me on how to care for my baby and helped me understand the importance of every small milestone. Thanks to their dedication, my baby is now healthy and strong. This program gave us hope when we needed it most, and I will forever be grateful for the care we received.
          </p>
          <div class="testimonial-name">Kate Taylor</div>
        </div>
      </div>
      <div class="item overflow-hidden w-full">
        <div class="shadow-effect py-4 px-2 ">
          <p class="text-sm md:text-base py-4 px-4 mb-2 text-black">
            The women empowerment program from divineone community has truly changed my life. When I first joined, I felt lost and unsure of my future. Through the workshops and mentorship, I gained valuable skills in entrepreneurship and financial management. The support from other women in the program inspired me to start my own small business. Now, I not only provide for my family but also feel confident and empowered to pursue my dreams. This program has given me a voice and a sense of community that I never had before. I am so grateful for the opportunity to grow.
          </p>
          <div class="testimonial-name">Faith Brown</div>
        </div>
      </div>
      <div class="item overflow-hidden w-full">
        <div class="shadow-effect py-4 px-2 ">
          <p class="text-sm md:text-base py-4 px-4 mb-2 text-black">
            Divineone community are amazing, their health initiative that helped me and my family. Before joining the program, we struggled to access basic healthcare and often went without necessary check-ups. The health workshops taught us about viral diseases and preventive care, and the free medical services provided us with the support we desperately needed. I now feel empowered to take charge of my family's health, and my children are healthier than ever. This program has truly transformed our lives, and I can't thank the medical team enough for their dedication and care.
          </p>
          <div class="testimonial-name">Martin Jackson</div>
        </div>
      </div>
      <div class="item overflow-hidden w-full">
        <div class="shadow-effect py-4 px-2 ">
          <p class="text-sm md:text-base py-4 px-4 mb-2 text-black">
            When the floods hit our town, I lost everything—my home, my belongings, and my sense of security. The emergency relief program came to our aid so quickly, providing food, clothing, and shelter when we needed it most. The volunteers were compassionate and understanding, helping us navigate through this difficult time. Thanks to their support, my family and I were able to find temporary housing and start the process of rebuilding our lives. I am forever grateful for the kindness and generosity of those who helped us during our darkest days. This program gave us hope and a fresh start.
          </p>
          <div class="testimonial-name">Caroline Carlos</div>
        </div>
      </div>
      <div class="item overflow-hidden w-full">
        <div class="shadow-effect py-4 px-2 ">
          <p class="text-sm md:text-base py-4 px-4 mb-2 text-black">
            I can't express how grateful I am to Divineone community for the Home of comfort program. After facing financial hardships, I found myself and my children without a place to live. Thanks to this initiative, we now have a safe and stable home. The support we received went beyond just housing; it included resources for job training and financial planning, which have helped me regain my independence. My children feel secure and happy, and I finally have hope for our future. This program has truly changed our lives, and I am so thankful for the opportunity to build a better life for my family.
          </p>
          <div class="testimonial-name">Mary Thompson</div>
        </div>
      </div>
    </div>
  </div>
</div>

 {{-- here to help --}}
<div class="bg-white25">
  <div class="wefirstneedyou"> 
    <div class="weneedyou2">We're here to help! </div>
    <p class="mt-4 weneedyousecond">
      <strong style="color: blue">Ready to make a difference with your philanthropic giving?</strong>. Let us know how we can help you make an impact with your philanthropic or CSR program.
    </p>
   
    <div class="mt-5 buttonexex" data-aos="fade-up">
      <a href="mailto:info@divineonecommunity.com" class="mt-5 text-center text-decoration-none">
        <span class="btn1"> SEND US A MESSAGE </span>
        </a>
    </div>
  </div>
</div>

{{-- footer --}}
<div class="footer22">
    <div class="footer1">
      <div class="text-white thrive" data-aos="zoom-in">
        Divineone Community makes it easy and safe for you to give aims and help our community anywhere in the world, while providing nonprofits with the aid, care, and support they need to thrive.
      </div>
      <div class="lastul">
        <div class="lastli">
          <a href="#">
            <i class="fa-brands fa-facebook-f icon"></i>    </a>
        </div>
        <div class="lastli">
          <a href="#">
            <i class="fa-brands fa-twitter icon"></i>    </a>
        </div>
        <div class="lastli">
          <a href="#">
            <i class="fa-brands fa-instagram icon"></i>    </a>
        </div>
        <div class="lastli">
          <a href="#">
            <i class="fa-brands fa-youtube icon"></i>    </a>
        </div>
      </div>
    </div>
    <div class="footer2">
      <div class="footerimagediv">
        <img src="{{ asset("images/logoremovebg.png") }}" alt="make a difference" class="footerimage" data-aos="fade-right">
      </div>
      <div class="mt-5 noop1">
        <span class="navigations2" data-aos="fade-up"> Donate </span>
        <div class="navigations">
          <!-- Button trigger modal -->
            <button type="button" class="btn btn-white text-white lastmodals" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-aos="fade-up">
              Donate Now
            </button>
  
            <!-- Modal -->
            <div class="modal fade text-black" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel" style="color: blue;">Divineoneone Community Donations </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="welastlast">Get A Mail From Us</div>
                    
                    <ul class="list-unstyled">
                      @if ($errors->any())
                        @foreach ($errors->all() as $error)
                          <li class="text-danger text-center">{{ $error }}</li>
                        @endforeach
                        
                        @if ($message = Session::get('success'))
                          <li class="text-success text-center">{{ $message }}</li>
                        @endif
                      @endif
                    </ul>
                   <form action="{{ route('send.message') }}" class="modalform" method="POST">
                      @csrf
  
                      <label for="form-label" class="modalformlabel">first Name</label>
                      <input type="text" name="firstname" required class="form-control shadow rounded-4 mb-3 modalinput" >
  
                      <label for="form-label" class="modalformlabel">Last Name</label>
                      <input type="text" name="lastname" required class="form-control shadow rounded-4 mb-3 modalinput">
  
                      <label for="form-label" class="modalformlabel">Email</label>
                      <input type="email" name="email" required class="form-control shadow rounded-4 mb-3 modalinput">
  
                      <label for="form-label" class="modalformlabel"> Phone </label>
                      <input type="tel" name="number" required class="form-control shadow rounded-4 mb-3 modalinput">
  
                      <label for="form-label" class="modalformlabel"> Address </label>
                      <textarea name="address" required id="" cols="30" rows="2" class="form-control shadow rounded-4 mb-3 modalinput"></textarea>
  
                      <label for="form-label" class="modalformlabel">Message</label>
                      <textarea name="message" required id="" cols="30" rows="5" class="form-control shadow rounded-4 mb-3 modalinput"></textarea>
  
                      <button class="btn btn-submit modalbut rounded-4"> Send Message</button>
  
                    </form> 
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            
        </div>
      </div>
  
      <div class="mt-5 noop">
        <span class="navigations2" data-aos="fade-up"> Navigations </span>
        <div class="navigations">
          <a href="{{ route('donations') }}" class="text-decoration-none text-white" data-aos="fade-up"> Home </a>
          <a class="text-decoration-none text-white" href="{{ route('about.us') }}" data-aos="fade-up"> About Us </a>
          <a class="text-decoration-none text-white" href="{{ route('project') }}" data-aos="fade-up"> True Projects </a>
          <a class="text-decoration-none text-white" href="{{ route('donation.matters') }}" data-aos="fade-up">Why Your Donation Matters</a>
  
          {{-- <div data-aos="fade-up">
            <!-- Button trigger modal -->
            <button type="button" class="btn text-white thirdofmodal" data-bs-toggle="modal" data-bs-target="#exampleModal">
              How Divineone Community Works
            </button>
  
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-aos="fade-up">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold" style="color: blue;" id="exampleModalLabel">How Divineone Community Works</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p style="color: blue;">
                      Divineone community works in a simple way, we are here to ensure that our community members and benefactors don't get lost on our to use our user friendly website <br>
                      <span class="mt-2 mb-2">Procedure</span>
                      <ol style="color: blue;">
                        <li>
                          After clicking on the divineone community <strong> www.divineonecommunity.com </strong>
                        </li> <br>
                        <li>
                          you will see our donation icon <i class="fa-solid fa-hand-holding-heart ms-2" style="color: blue;"></i>
                        </li> <br>
                        <li>
                          click on the icon <i class="fa-solid fa-hand-holding-heart ms-2" style="color: blue;"></i>
                        </li> <br>
                        <li>
                          fill the <strong>Donation Form</strong> with your correct information
                        </li> <br>
                        <li>
                          Divineone Community will get back to you with our secured payment method.
                        </li> <br>
                      </ol>
                      <span style="color: blue;" class="mt-2"> Thank You for choosing <strong> Divineone Community </strong> and your kindly donations </span>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background-color: blue;" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
          
        </div>
      </div>
  
      <div class="mt-5 noop">
        <span class="navigations2" data-aos="fade-up"> Companies </span>
        <div class="navigations">
          <a href="{{ route('our.service') }}" class="text-decoration-none text-white" data-aos="fade-up"> Our Servies </a>
          <a class="text-decoration-none text-white" href="{{ route('our.partners') }}" data-aos="fade-up"> Our Partners </a>
          {{-- terms and conditions --}}
  
          <div data-aos="fade-up">
  
            {{-- terms and conditions --}}
            <!-- Button trigger modal -->
            <button type="button" class="btn text-white secondofmodal" data-bs-toggle="modal" data-bs-target="#Modal">
             Terms of Service
            </button>
  
            <!-- Modal -->
            <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center fw-bold" style="color: blue;" id="exampleModalLabel">Terms of Service</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-black">
                    <p>
                      Divineone Community respects your online privacy and recognises your need for appropriate protection and management of any personally identifiable information you share with us. The Divineone Community General Terms of Use page provides a link to our updated Data Protection and Privacy Policy, which explains the care with which we treat your personal information. Please read it carefully. <br> <br>
  
                      By accessing this site you agree to be bound by the Terms of Use below. In case of dispute please note that only the English version of the site as well as of the Terms of Service (both “Divineone Community and All Users” and “Divineone Foundation and Charities”) and the Data Protection and Privacy Policy will be legally binding. <br> <br>
  
                      If you do not agree to the Terms, please do not access this site. Copyright © Divineone Community 2020-2023. All Rights Reserved. <br> <br>
  
                      Copyright in the pages and in the screens displaying the pages, and in the information and material therein and in their arrangement, is owned by Divineone Community unless otherwise indicated. <br> <br>
                      
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;">Trademarks</span> <br>
                      Divineone Community and its subsidiaries claim rights in certain trademarks and service marks contained in these web pages. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;">Use of information </span> <br>
  
                      The information and materials contained in these pages, and the terms, conditions, and descriptions that appear, are subject to change. Unauthorized use of Divineone Community web sites and systems including but not limited to unauthorized entry into Divineone Community systems, or misuse of any information posted on a site is strictly prohibited. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Our Links </span> <br>
  
                      DIVINONE COMMUNITY HEREBY DISCLAIMS LIABILITY FOR, ANY INFORMATION, SERVICES POSTED OR OFFERED AT ANY OF THE THIRD PARTY SITES LINKED TO THIS WEB SITE. BY CREATING A LINK TO A THIRD PARTY WEB SITE, DIVINEONE COMMUNITY DOES NOT ENDORSE OR RECOMMEND ANY PRODUCTS OR SERVICES OFFERED OR INFORMATION CONTAINED AT THAT WEB SITE, NOR IS DIVINEONE COMMUNITY LIABLE FOR ANY FAILURE OF PRODUCTS OR SERVICES OFFERED OR ADVERTISED AT THOSE SITES. SUCH THIRD PARTY MAY HAVE A PRIVACY POLICY DIFFERENT FROM THAT OF DIVINEONE COMMUNITY AND THE THIRD PARTY WEBSITE MAY PROVIDE LESS SECURITY THAN THE DIVINEONE COMMUNITY SITE. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Submissions </span> <br>
  
                      All information submitted to Divineone Community via this site shall be deemed and remain the property of Divineone CommunityY and Divineone Community shall be free to use, for any purpose, any idea, concepts, know-how or techniques contained in information a visitor to this site provides GivenGain through this site. Divineone Community shall not be subject to any obligations of confidentiality regarding submitted information except as agreed by the Divineone Community entity having the direct customer relationship or as otherwise specifically agreed or required by law. Nothing contained herein shall be construed as limiting or reducing Divineone Community's responsibilities and obligations to customers in accordance with the Divineone Community Privacy Policy. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> No Warranty </span> <br>
  
                      THE INFORMATION AND MATERIALS CONTAINED IN THIS SITE, INCLUDING TEXT, GRAPHICS, LINKS OR OTHER ITEMS ARE PROVIDED "AS IS", "AS AVAILABLE". DIVINEONE COMMUNITY DOES NOT WARRANT THE ACCURACY, ADEQUACY OR COMPLETENESS OF THIS INFORMATION AND MATERIALS AND EXPRESSLY DISCLAIMS LIABILITY FOR ERRORS OR OMISSIONS IN THIS INFORMATION AND MATERIALS. NO WARRANTY OF ANY KIND, IMPLIED, EXPRESSED OR STATUTORY INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF NON-INFRINGEMENT OF THIRD PARTY RIGHTS, TITLE, MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND FREEDOM FROM COMPUTER VIRUS, IS GIVEN IN CONJUNCTION WITH THE INFORMATION AND MATERIALS. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Limitation of Liability </span> <br>
  
                      IN NO EVENT WILL DIVINEONE COMMUNITY BE LIABLE FOR ANY DAMAGES, INCLUDING WITHOUT LIMITATION DIRECT OR INDIRECT, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGES, LOSSES OR EXPENSES ARISING IN CONNECTION WITH THIS SITE OR ANY LINKED SITE OR USE THEREOF OR INABILITY TO USE BY ANY PARTY, OR IN CONNECTION WITH ANY FAILURE OF PERFORMANCE, ERROR, OMISSION, INTERRUPTION, DEFECT, DELAY IN OPERATION OR TRANSMISSION, COMPUTER VIRUS OR LINE OR SYSTEM FAILURE, EVEN IF GIVENGAIN, OR REPRESENTATIVES THEREOF, ARE ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, LOSSES OR EXPENSES. <br><br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Availability </span> <br>
                      
                      This site is not intended for distribution to, or use by, any person or entity in any jurisdiction or country where such distribution or use would be contrary to local law or regulation.
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background-color: blue;"  data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
  
            
          </div>
          
  
          {{-- Private Policy --}}
  
          <div data-aos="fade-up">
            <!-- Button trigger modal -->
            <button type="button" class="btn text-white secondofmodal2" data-bs-toggle="modal" data-bs-target="#eModal">
              Private Policy
            </button>
  
            <!-- Modal -->
            <div class="modal fade" id="eModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center fw-bold" style="color: blue;" id="exampleModalLabel">Private Policy</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-black">
                    <p>
                      Divineone Community operates website including divineonecommunity.com It is Divineone Community's policy to respect your privacy regarding any information Divineone Community may collect while operating its websites as Divineone Community takes the protection of your data seriously in all of its processing. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;">Consent</span> <br>
                       It will be very difficult and in some cases even impossible for Divineone Community to provide you services if you refuse to allow Divineone Community to process your data. for this reason, by providing Divineone Community with your data, you explicitly agree to the processing of your data for the purposes mentioned hereinafter and to be legally bound by and explicitly consent to this data protection and privacy policy, as it may be amended from time to time. if you do not agree to this data protection and privacy policy or cannot form a legally binding contract, you are not permitted to provide Divineone Community with any data. <br> <br>
  
                       You may request to delete your information on Divineone Community’s websites at any time by sending us a mail. if you have provided Divineone Community with other data in addition to those sent, you also have the right to withdraw your consent to the processing of such data at any time by contacting the data protection officer at info@divineonecommunity.com . should you withdraw your consent to the processing of your data, you are hereby informed that such withdrawal may prevent Divineone Community from providing all or certain of its available services. this data protection and privacy policy is without prejudice of your right to lodge a complaint with a supervisory authority, if necessary. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;">Scope of this Data Protection and Privacy Policy </span> <br>
  
                      This Data Protection and Privacy Policy applies to the services offered by Divineone Community through its website. <br> <br>
  
                      This Data Protection and Privacy Policy does not apply to services offered by other companies or individuals. This Data Protection and Privacy Policy does not cover the activities performed by other companies and organizations who advertise Divineone Community’s services or any third party operating any website to which Divineone Community’s websites may contain a link. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Data collected and purposes of the collection </span>  <br> <br>
  
                      <span class="fs-4 mt-2 mb-2" style="color: blue;"> Non-personal data </span> <br>
  
                      Like most website operators, Divineone Community collects from visitors of Divineone Community’s websites non-personal data of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site and the date and time of each visitor request. Divineone Community's purposes in collecting such non-personal data are to optimize users’ experience of the Divineone Community’s websites and render them more user-friendly, better understand how visitors use Divineone Community’s websites and analyze their behavior for statistical purposes, for example by monitoring the most popular service accounts on the Divineone Community’s websites. From time to time, Divineone Community may release non-personal data in the aggregate, e.g., by publishing a report on trends in the usage of its websites. Divineone Community may display this information publicly or provide it to third parties. <br> <br>
  
                      <span class="fs-4 mt-2 mb-2" style="color: blue;"> Personal data </span> <br>
  
                      Certain users of Divineone Community's websites choose to interact with Divineone Community in ways that require Divineone Community to gather personal data. Divineone Community does not collect and process more personal data than is necessary to fulfill the purposes for which personal data is collected and processed. The amount and type of personal data that Divineone Community gathers depends on the nature of the interaction, as detailed below. <br> <br>
  
                      <ul>
                        <li>
                          Registered users: users who sign up on Divineone Community's websites are required to provide a fullname and email address for identification purposes. Divineone Community also collects Internet Protocol (IP) addresses for security reasons.
                        </li> <br>
                        <li>
                          Donations: when you make a donation to a charity on Divineone Community, whether directly on the charity page or on a fundraising page, Divineone Community collects a variety of personal data about you in order to properly process your donation. This personal data may include your name, address, phone number, email address, the message you have written to the charity or fundraiser and the donation amount. Divineone Community shares this information with the charity(ies) to whom you have designated your donation so that the charity can enter you into their database of supporters. Divineone Community encourages you to review the privacy policy of a particular organization before making a donation.
                        </li> <br>
                        <li>
                          Transactions with Divineone Community: those who engage in transactions with Divineone Community (e.g. representative of the charities making payments on behalf of the charities) are asked to provide additional information, including the personal and financial information required to process those transactions. In each case, Divineone Community collects such information only insofar as is necessary or appropriate to fulfill the purpose of the data subject's interaction with GivenGain.
                        </li> <br>
                        <li>
                          Support: if you send Divineone Community a request (for example via a support email or via one of GivenGain feedback mechanisms), Divineone Community reserves the right to publish it in order to help Divineone Community clarify or respond to your request or to help Divineone Community support other users.
                        </li> <br>
                        <li>
                          Legal and other purposes: Divineone Community may process personal data <br> (a) to the extent necessary for compliance with a legal obligation to which Divineone Community is subject, <br> (b) to respond to requests from competent public and government authorities, <br> (c) to perform a task carried out in the public interest, <br> (d) to enforce this Data Protection and Privacy Policy and <br> (e) to protect Divineone Community's legitimate interests (in such a case, Divineone Community will disclose to you the legitimate interests at stake).
                        </li> <br> <br>
                      </ul>
  
                      Divineone Community will not rent or sell personal data to anyone and will ask your consent before using personal data for a purpose other than those set out in this Data Protection and Privacy Policy, subject to mandatory laws. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Requests </span> <br>
  
                      You have the right to access and update your personal data at any time through your account on Divineone Community’s websites. <br>
                      
                      In addition and to the extent applicable, you are entitled to submit a request to the Data Protection Officer in order to: <br> <br>
  
                      <ul>
                        <li>
                          have access to your personal data and obtain information in relation thereto (i.e. purposes of the processing, categories of personal data concerned, recipients to whom personal data have been or will be disclosed, etc.);
                        </li> <br>
                        <li>rectify your personal data;</li> <br>
                        <li>
                          erase your personal data, unless retention of personal data is required by any applicable law or competent court or authority;
                        </li> <br>
                        <li>restrict or object to the processing of your personal data; and </li> <br>
                        <li>
                          receive, or request Divineone Community to transmit to another designated person or entity, your personal data in a structured, commonly used and machine-readable format.
                        </li>
                      </ul> <br> <br>
  
                      To exercise any of the above mentioned rights, please contact us via mail info@divineonecommunity.com who will subsequently confirm you the execution of your request. <br>
  
                      If requests are manifestly unfounded or excessive, in particular because of their repetitive character, Divineone Community reserves its right to either charge a reasonable fee taking into account the request or refuse to act on the request. <br>
  
                      Without prejudice of non-personal data, Divineone Community may request the provision of additional information to confirm the identity of the data subject if they have reasonable doubts concerning the identity of the person making the request. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Duration of storage </span> <br>
  
                      General and personal data will be kept by Divineone Community only as long as it is necessary for the purposes for which they have been provided, unless retention of data is required by any applicable law or competent court or authority or for statistical or archiving purposes. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Location of storage </span> <br>
  
                      <ul>
                        <li>
                          User data: your user information (i.e. name, email address, etc.) are stored in Divineone Community’s servers which are located in a third party provider’s data center in Ireland.
                        </li>
                      </ul> <br><br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Security measures </span> <br>
                      
                      Divineone Community has taken and will maintain appropriate technical and organizational security measures in particular to protect your personal data against unauthorized or unlawful processing, accidental loss, destruction or damage and ensure the ongoing confidentiality, integrity, availability of personal data and resilience of the systems and services used for processing of personal data. Divineone Community will test and review the efficiency of the implemented technical and organizational measures on a regular basis. <br><br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Your obligations </span> <br>
  
                      You must ensure that data you provide GivenGain with are: <br> <br>
  
                      <ul>
                        <li>correct;</li> <br>
                        <li>accurate;;</li> <br>
                        <li>truthful; and </li> <br>
                        <li>compliant with any applicable laws. </li> <br>
                      </ul> <br>
  
                      In particular, since Divineone Community will mainly use email communications with you, you are required to notify Divineone Community of any modification of your email address. Alternatively, you can directly update your contact profile on your account. <br> <br>
  
                      Insofar as you provide Divineone Community with personal data about third parties, you represent and warrant that you have the right to share this personal data and where necessary have obtained sufficient informed consent from such persons and provided them with all necessary information, as may be required by applicable law or agreement, for Divineone Community to store and process any such personal data. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Disclosure of your data </span> <br>
  
                      To accomplish the purposes mentioned in this Data Protection and Privacy Policy, your personal data may be disclosed to other entities, including to entities located in countries whose data protection laws may be different from, and less stringent than, those in your country of residence and for which there is no decision of adequacy of the EU Commission considering that the relevant country ensures an adequate level of protection for personal data. You hereby agree and give your consent to Divineone Community to transfer and communicate your personal data as follows: <br> <br>
  
                      <ul>
                        <li>
                          Transfers to third parties: Divineone Community may disclose your data to its third-party contractors located in the US, UK, South Africa, Australia, The Netherlands, Czech Republic and Switzerland that need to have access to such data in order to process it on Divineone Community's behalf or to provide services available at Divineone Community's websites, in particular to charities, payment processors, IT service providers, customer support providers, auditors and lawyers. A complete and detailed list of up-to-date third-party service providers is available upon request. Third-party contractors have executed agreements with Divineone Community requiring in particular that they abide by the rules of the applicable data protection laws, in particular the EU General Data Protection Regulation 2016/679, and comply with any instruction they receive from Divineone Community, as data controller, regarding personal data.
                        </li> <br>
                      </ul> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Cookies </span> <br>
  
                      A cookie is a string of information that a website stores on a visitor's computer, and that the visitor's browser provides to the website each time the visitor returns. Divineone Community uses cookies to help Divineone Community identify and track visitors, their usage of the Divineone Community website, and their website access preferences. Divineone Community visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using Divineone Community's websites, with the drawback that certain features of Divineone Community's websites may not function properly without the aid of cookies. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Adverts </span> <br>
  
                      This Privacy does not regulate the use of cookies by any advertisers. Divineone Community nonetheless informs you that ads appearing on any of Divineone Community's websites may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Data Protection and Privacy Policy Changes </span> <br>
  
                      Divineone Community may change its Data Protection and Privacy Policy from time to time and in Divineone Community's sole discretion, in particular to comply with statutory data protection and privacy laws. Divineone Community encourages users to frequently check this page for any changes to this Data Protection and Privacy Policy. If you have a Divineone Community account, you should also check your account dashboard for alerts to these changes. Your continued use of Divineone Community's websites after any non-significant change to this Data Protection and Privacy Policy will constitute your acceptance of such change.
  
                      If the changes are significant (e.g. your personal data will be processed for new purposes), Divineone Community will require your consent during your next visit on Divineone Community's website. Divineone Community will not be able to provide you with all or part of its services as long as you have not accepted the amended terms. <br> <br>
  
                      <span class="fs-3 mt-2 mb-2 fw-bold" style="color: blue;"> Contact </span> <br>
  
                      If you need further assistance, contact us via our email info@divineonecommunity.com or by visiting Divineone Community’s website and clicking on <i class=" fa-solid fa-hand-holding-heart fa-xl ms-2 me-2 " style=" color:blue;"></i> to submit your inquiry. <br> <br>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background-color: blue;"  data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
  
            
          </div>
  
        </div>
  
      </div>
  
    </div>
    <div class="footer3 text-center">
      <div >&copy; copyright 2025 ~ Divineone Community </div>
    </div>
</div>


@endsection