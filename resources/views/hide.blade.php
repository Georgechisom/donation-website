{{-- .tiles {
    width: 80%;
    text-align: center;
    margin-left: 90%;
    margin-top: 45%;
    transform: translate(-50%,-50%);
    box-shadow: 0 15px 45px -20px blue;
    .tile {
      display: inline-block;
      // margin: 10px;
      text-align: center;
      opacity: .99;
      overflow: hidden;
      position: relative;
      border-radius: 3px;
      // box-shadow: 0 0 20px 0 rgba(0,0,0,.05);

      .ceopo{
        font-size: 16px;
      }
      
      &:before {
        content: '';
        background: linear-gradient(
          to bottom,
          rgba(0,0,0,0) 0%,
          rgba(0,0,0,0.7) 100%
        );
        width: 100%;
        height: 50%;
        opacity: 0;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 2;
        transition-property: top, opacity;
        // transition-duration: anim-speed;
        transition-duration: calc(anim-speed);
      }
      
      img {
        display: block;
        max-width: 100%;
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
      }
      
      .details {
        font-size: 16px;
        padding: 20px;
        color: #fff;
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: 3;
        
        span {
          display: block;
          opacity: 0;
          position: relative;
          top: 100%;
          transition-property: top, opacity;
          // transition-duration: $anim-speed;
          transition-duration: calc(anim-speed);
          transition-delay: 0s;
        }
        
        .title {
          line-height: 1;
          font-weight: bold;
          font-size: 25px;
        }
        
        .info {
          line-height: 1.2;
          margin-top: 5px;
          font-size: 14px;
        }
      }
      
      &:focus,
      &:hover {
        
        &:before,
        span {
          opacity: 1;
        }
        
        &:before {
          top: 50%;
        }
        
        span {
          top: 0;
        }
        
        .title {
          transition-delay: 0.15s;
        }
        
        .info {
          transition-delay: 0.25s;
        }
      }
    }
} --}}

{{-- .tiles1 {
    width: 80%;
    text-align: center;
    margin-left: 90%;
    margin-top: 45%;
    transform: translate(-50%,-50%);
    box-shadow: 0 15px 45px -20px blue;
    .tile {
      display: inline-block;
      // margin: 10px;
      text-align: center;
      opacity: .99;
      overflow: hidden;
      position: relative;
      border-radius: 3px;
      // box-shadow: 0 0 20px 0 rgba(0,0,0,.05);

      .ceopo{
        font-size: 16px;
      }
      
      &:before {
        content: '';
        background: linear-gradient(
          to bottom,
          rgba(0,0,0,0) 0%,
          rgba(0,0,0,0.7) 100%
        );
        width: 100%;
        height: 50%;
        opacity: 0;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 2;
        transition-property: top, opacity;
        // transition-duration: anim-speed;
        transition-duration: calc(anim-speed);
      }
      
      img {
        display: block;
        max-width: 100%;
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
      }
      
      .details {
        font-size: 16px;
        padding: 20px;
        color: #fff;
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: 3;
        
        span {
          display: block;
          opacity: 0;
          position: relative;
          top: 100%;
          transition-property: top, opacity;
          // transition-duration: $anim-speed;
          transition-duration: calc(anim-speed);
          transition-delay: 0s;
        }
        
        .title {
          line-height: 1;
          font-weight: bold;
          font-size: 25px;
        }
        
        .info {
          line-height: 1.2;
          margin-top: 5px;
          font-size: 14px;
        }
      }
      
      &:focus,
      &:hover {
        
        &:before,
        span {
          opacity: 1;
        }
        
        &:before {
          top: 50%;
        }
        
        span {
          top: 0;
        }
        
        .title {
          transition-delay: 0.15s;
        }
        
        .info {
          transition-delay: 0.25s;
        }
      }
    }
} --}}


<div class="tiles">
    <a class="tile">
      <img src="{{ asset('images/projet1.jpg') }}" class="" />
      <div class="details">
        <span class="title"> Neonatal Project </span> 
          <span class="info">
            Since 2000s infant mortality have been an age long problem, but Divineone community provision of technological advances, enhanced understanding of newborn physiology, improved sanitation practices, and development of specialized units for neonatal intensive care, have led to a significant decline in infant mortality. 
          </span>
      </div>
    </a>
    <div class="ceopo pb-5 pt-3">
      <p> We have saved over <strong style="color: blue">5,000 infants</strong>  from dying by expanding community support </p>
      <p> We are committed to ensure that infant children get necessary aid and support </p>
    </div>
</div>

<div class="tiles1">
    <a class="tile">
      <img src="{{ asset('images/projet.jpg') }}" class="" />
      <div class="details">
        <span class="title"> Maternal Project </span> 
          <span class="info">
            Divineone community have builted obstetrical care centers, educated and provided resources to women in order to gained access to medical, nursing, and health-related services. The global maternal mortality has fallen by about 44%, which represented a decline of about 2.3 percent annually over period from 2020 to 2023. 
          </span>
      </div>
    </a>
    <div class="ceopo pb-5 pt-3">
      <p> Provision of <strong style="color: blue"> above 1500 obstetrical care centers </strong> to reduce maternal mortality </p>
      <p> Our goal is to provide pregnant women with the best medical, nursing, and health-related services. </p>
    </div>
</div>

<div class="mediaqueries">
    .tiles {
        width: 80%;
        text-align: center;
        margin-left: 80%;
        margin-top: 50%;
    }
    .tiles1 {
        width: 80%;
        text-align: center;
        margin-left: 80%;
        margin-top: 20%;
    }
    .tile {
        display: inline-block;
        text-align: center;
        position: relative;
        border-radius: 3px;
        margin-top: 0%;
        font-size: 15px !important;
    }
    .info {
        line-height: 0;
        font-size: 10px !important;
        /* padding-top: 5% !important; */
    }
    .ceopo{
        padding: 5% 5%;
    }
    .details{
        font-size: 12px;
        width: 90%;
    }
    
    .title {
        font-size: 15px !important;
    }
</div>

{{-- #container22 {
  display: flex;
  flex-flow: row;
  width: 100vw;
  height: 60vh;
}  --}}