<script setup>
import { ref } from "vue";
let formBody = ref({
  firstName: "",
  lastName: "",
  option1: true,
  option2: false,
  gender: "Male",
  city: "Rangpur",
  range: 10,
  textArea: "",
  birthday: new Date().toISOString().slice(0, 10),
  myFile: null
})
const onSubmit = () => {
  // Validation
  alert(JSON.stringify(formBody.value))

  // Submit JSON Body Using Application/JSON Header
}

const handleFileChange=(event)=>{
    const myFileObj=event.target.files[0];
    formBody.value.myFile=myFileObj;
  }

  const onSubmitWithFile=()=>{
    // If You Goes to Submit The For With File
    const  formData=new FormData()
    formData.append("firstName",formBody.firstName)
    formData.append("lastName",formBody.lastName)
    formData.append("option1",formBody.option1)
    formData.append("option2",formBody.option2)
    formData.append("gender",formBody.gender)
    formData.append("city",formBody.city)
    formData.append("range",formBody.range)
    formData.append("textArea",formBody.textArea)
    formData.append("birthday",formBody.birthday)
    formData.append("gender",formBody.gender)
    formData.append("birthday",formBody.birthday)
    formData.append("myFile", formBody.value.myFile);

    // Submit Form Data Using multipart/form-data Header
  }
</script>

<template>
  <form @submit.prevent="onSubmit">
    <div class="container">
      <div class="row">
        <h3>My Form</h3>

        <div class="col-3 p-2">
          <label>First Name</label>
          <input v-model="formBody.firstName" class="form-control" type="text" placeholder="First Name" />
        </div>

        <div class="col-3 p-2">
          <label>Last Name</label>
          <input v-model="formBody.lastName" class="form-control" type="text" placeholder="Last Name" />
        </div>

        <div class="col-3 p-2">
          <div class="form-check">
            <input v-model="formBody.option1" class="form-check-input" type="checkbox">
            <label class="form-check-label">Option 1</label>

          </div>
          <div class="form-check">
            <input v-model="formBody.option2" class="form-check-input" type="checkbox">
            <label class="form-check-label">Option 2</label>
          </div>
        </div>

        <div class="col-3 p-2">
          <div class="form-check">
            <input v-model="formBody.gender" value="Male" class="form-check-input" type="radio" name="flexRadioDefault">
            <label class="form-check-label">Male</label>
          </div>
          <div class="form-check">
            <input v-model="formBody.gender" value="Female" class="form-check-input" type="radio"
              name="flexRadioDefault">
            <label class="form-check-label" for="flexRadioDefault2">Female</label>
          </div>
        </div>

        <div class="col-3 p-2">
          <label>City</label>
          <select v-model="formBody.city" class="form-select form-control" type="text">
            <option value="Dhaka">Dhaka</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Khulna">Khulna</option>
          </select>
        </div>


        <div class="col-3 p-2">
          <label>Range</label>
          <input v-model="formBody.range" class="form-range" type="range" max="100" min="0" />
        </div>


        <div class="col-3 p-2">
          <label>Text Area</label>
          <textarea v-model="formBody.textArea" class=" form-control" rows="4" />
        </div>


        <div class="col-3 p-2">
          <label>Date</label>
          <input v-model="formBody.birthday" class="form-control" type="date" />
        </div>

        <div class="col-3 p-2">
          <label>File</label>
          <input @change="handleFileChange" class="form-control" type="file" />
        </div>

        <div class="col-3 p-2">
          <button type="submit" class="btn btn-success w-100">Submit</button>
        </div>

      </div>
    </div>
  </form>
  {{ JSON.stringify(formBody) }}
</template>

<style scoped></style>
