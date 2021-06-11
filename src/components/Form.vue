<template>
    
    <form  @submit.prevent="submitEntry" dir="rtl" lang="ar" class="mb-4 mx-auto ">
        <div>
          <p class="job-choice">1 - الرجاء اختــيار المهــام</p>
          <ul class="flex justify-between list-ul">
            <li class="list-li">
              <input type="radio" id="myCheckbox3" name="occupy" value="tree" v-model="selectedJob"/>
              <label for="myCheckbox3"><img src="../assets/farming.svg" /></label>
              <label for="myCheckbox3" class="label-title">تشجــير</label>
              <ul>
                <li>حفـر</li>
                <li>غــرس</li>
                <li>ري</li>
              </ul>
            </li>
            <li class="list-li">
              <input type="radio" id="myCheckbox2"  name="occupy" value="paint" v-model="selectedJob"/>
              <label for="myCheckbox2"><img src="../assets/paint-roller.svg" /></label>
              <label for="myCheckbox2" class="label-title">طــلاء</label>
              <ul>
                <li>الجدران</li>
                <li>الكراسي</li>
              </ul>
            </li>
            <li class="list-li">
              <input type="radio" id="myCheckbox1"  name="occupy" value="clean" v-model="selectedJob"/>
              <label for="myCheckbox1"><img src="../assets/cleaning.svg" /></label>
              <label for="myCheckbox1" class="label-title">تنــظيف</label>
              <ul class="normal-list ">
                <li>الداخلي</li>
                <li>الخارجي</li>
                <li>الزجاج</li>
              </ul>
            </li>
          </ul>
        </div>
  
        <div v-if="responseState == 275" class="response error">
          <p>الرجاء اختــيار المهــام</p>
        </div>
        
        <div v-if="responseState == 200" class="response success">
          <p>تــم التــسجيل بـنجاح</p>
        </div>

        <div v-if="responseState == 276" class="response error">
          <p>الرجاء تسجيل الإســم الكــامل</p>
        </div>

        <div v-if="responseState == 279" class="response error">
          <p>الرجاء تسجيل الإســم بالاحــرف فقط</p>
        </div>

        <div v-if="responseState == 280" class="response error">
          <p>الرجاء تسجيل الإســم الكــامل بالاحــرف فقط</p>
        </div>

        <div v-if="responseState == 277" class="response error">
          <p>الرجاء تسجيل رقم الهاتف</p>
        </div>

        <div v-if="responseState == 278" class="response error">
          <p> الرجاء تسجيل رقم الهاتف صحـيح</p>
        </div>

        <div v-if="responseState == 2" class="response error">
          <p>رقم الهاتف مسجل من قبل</p>
          <p>الرجاء تسجيل رقم هاتف آخر</p>
        </div>
        
        <div class="line"></div>

        <div class="form">
          <input type="text" name="text" autocomplete="off" required lang="ar" v-model="full_name"/>
          <label for="text" class="label-name" :class="{ red: responseState == 279  || responseState == 280  }">
            <span class="content-name">
              2 - الإســم الكــامل
            </span>
          </label>
        </div>
        <div class="form">
          <input type="text" name="tel" autocomplete="off" minlenght="9" maxlength="10"  required  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" v-model="phone_number"/>
          <label for="text" class="label-name" :class="{ red: responseState == 278 || responseState == 277 }" id="phone" name="phone" pattern="[0][5-7][0-9]{8}">
            <span class="content-name">
              3 - رقم الهاتف
            </span>
          </label>
          
        </div>
        <div class="flex items-center justify-between">
          <button class="submit-btn bg-blue-500  text-white font-bold py-2 px-4 rounded " type="submit">
            الاشـتـراك
          </button>
        </div>
      </form>

</template>

<script>
import axios from 'axios'

export default {
    name: 'Form',
    data() {
        return {
            selectedJob: '',
            responseState: '',
            
        }
    },
    methods: {
        submitEntry() {
        axios.post('https://survey-uat.herokuapp.com/api/submit', {
            choice: this.selectedJob,
            full_name: this.full_name,
            phone_number: this.phone_number
        }, {
            headers: {
            'Authosization': `I m Jervi, no body can do that, Okay, Contact me if u want to get hired cuz u catched my header Request, so I hate to admit my naivete, but yh this system isnt well secure, just api brk, al mohim, rani f la fac ta3 tmouchent. call me at 0558054300 and say :: I got yow ass Jervi with Txi Txi:: . so i can know what u are talking about`
            }
        })
        .then(res => {
            if(res)
            {
            this.responseState = res.status;
            }
        })
        .catch(err => {
            if(err)
            {
            this.responseState = 2
            }
        })
        }
    },
}
</script>


<style scoped>
/* main card */

form {
  height: 70%;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  margin-bottom: 12%;
}

/* Server Response */
.response {
  padding: 10px;
  border-radius: 9px;
}

.response p {
    color: white;
    /* font-weight: 100; */
    font-size: 20px;
}

.success {
  background-color: #2abb9b;
  border: 1px solid #2abb9ba9 !important;
  animation-name: appear;
  animation-duration: 0.5s;
}

.error {
  background: #f03434;
  border: 1px solid #f03434a9 !important;
  animation-name: appear;
  animation-duration: 0.5s;
}

@keyframes appear {
  from {opacity: 0;}
  to {opacity: 1;}
}


/* Submit Button */
.submit-btn {
  background: #2abb9b;
}

.submit-btn:hover {
  background: #228a73;
  transition: 0.5s;
}

/* Separative Line */
.line{
  width: 98%;
  height: 2px;
  border-top: 2px solid #2abb9b;
}

/* User Details */

.content-name {
  font-weight: 900;
}

.label-title {
  color: #2abb9b;
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 0px;
  padding-bottom: 0px;
}

h1 {
  padding-bottom: 30px;
  font-weight: 900;
  font-size: 35px;
}
.form {
  width: 100%;
  position: relative;
  height: 60px;
  overflow: hidden;
}

.form input {
  width: 100%;
  height: 100%;
  color: rgb(0, 0, 0);
  padding-top: 20px;
  border: none;
}
.form label {
  position: absolute;
  bottom: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  pointer-events: none;
  border-bottom: 2px solid rgb(204, 204, 204);
}
.form label::after {
  content: "";
  position: absolute;
  bottom: -3px;
  left: 0px;
  width: 100%;
  height: 100%;
  border-bottom: 3px solid #2abb9b;
  transform: translateX(90%);
  transition: all 0.3s ease;
}


.form label.red::after {
  border-bottom: 3px solid #f03434;
}


.content-name {
  position: absolute;
  bottom: 0px;
  right: 1.1rem;
  padding-bottom: 5px;
  transition: all 0.3s ease;
}

.form input:focus {
  outline: none;
}
.form input:focus + .label-name .content-name,
.form input:valid + .label-name .content-name {
  transform: translateY(-50%);
  font-size: 14px;
  right: 0.7rem;
  color: #2abb9b;
}

.form input:focus + .label-name.red .content-name,
.form input:valid + .label-name.red .content-name {
  transform: translateY(-50%);
  font-size: 14px;
  right: 0.7rem;
  color: #f03434;
}


.form input:focus + .label-name::after,
.form input:valid + .label-name::after {
  transform: translateX(0%);
}


/*Job Choice */
.job-choice {
  text-align: right;
  font-weight: 900;
  margin-bottom: 5px;
}


.list-ul { 
  display: flex;
  flex-direction: column;
  list-style-type: none;
}

@media only screen and (min-width: 360px){

  .list-ul {
    flex-direction: row;
  }
}


.list-li {
  display: inline-block;
}


.list-li:hover {
  background: #ddd;
  border-radius: 7px;
  transition: 0.4s;
}

input[type="radio"][id^="myCheckbox"] {
  display: none;
}

label {
  border: 1px solid #fff;
  padding: 10px;
  display: block;
  position: relative;
  margin: 10px;
  cursor: pointer;
}

label:before {
  background-color: white;
  color: white;
  content: " ";
  display: block;
  border-radius: 50%;
  border: 1px solid grey;
  position: absolute;
  top: -5px;
  left: -5px;
  width: 25px;
  height: 25px;
  text-align: center;
  line-height: 28px;
  transition-duration: 0.4s;
  transform: scale(0);
}

label img {
  height: 100px;
  width: 100px;
  transition-duration: 0.2s;
  transform-origin: 50% 50%;
}

:checked + label {
  border-color: #ddd;
  background-color: rgb(201, 201, 201);
  border-radius: 20px;
  transition: 0.5s;

}

:checked + label:before {
  content: "✓";
  background-color: grey;
  transform: scale(1);
}

:checked + label img {
  transform: scale(0.9);
  /* box-shadow: 0 0 5px #333; */
  z-index: -1;
}


</style>