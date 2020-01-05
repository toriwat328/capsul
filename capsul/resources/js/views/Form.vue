<template>
<div>

    <div class="message is-light form">
        <div class="message-header is-light">
            <h1>Upload Your Photos</h1>
        </div>
        <div class ="message-body is-light formpositon">
            <form @submit.prevent="onSubmit" @keydown="form.errors.clear()">
                <p class="control">
                    <label class="label">Image URL</label>
                    <span><input type="text" v-model="form.image"> <button type="button" @click="clearImgField">Clear</button></span
                    <span class="help is-danger" v-if="form.errors.has('image')" v-text="form.errors.get('image')"></span>
                </p>

                <p class="control">
                    <label class="label">Neighborhood</label>
                    <select v-model="form.neighborhood" >
                      <option disabled value="">Please select a neighborhood</option>
                      <option>Central Park</option>
                      <option>Chelsea</option>
                      <option>East Harlem</option>
                      <option>East Village</option>
                      <option>Financial District</option>
                      <option>Greenwich Village</option>
                      <option>Harlem</option>
                      <option>Hell's Kitchen</option>
                      <option>Kips Bay</option>
                      <option>Lenox Hill</option>
                      <option>Lower East Side</option>
                      <option>Midtown</option>
                      <option>Morningside Heights</option>
                      <option>Nomad</option>
                      <option>Soho/ChinaTown/Tribeca</option>
                      <option>Theater District</option>
                      <option>Upper East Side</option>
                      <option>Upper West Side</option>
                       <option>West Village</option>
                    </select>
                    <span class="help is-danger" v-if="form.errors.has('neighborhood')" v-text="form.errors.get('neighborhood')"></span>
                </p>

                <p class="control">
                    <label class="label">Decade</label>
                    <select v-model="form.decade">
                      <option disabled value="">Please select a decade</option>
                      <option>2020s</option>
                      <option>2010s</option>
                      <option>1990s</option>
                      <option>1980s</option>
                      <option>1970s</option>
                      <option>1960s</option>
                      <option>1950s</option>
                      <option>1940s</option>
                    </select>
                    <span class="help is-danger" v-if="form.errors.has('decade')" v-text="form.errors.get('decade')"></span>
                </p>

                <p class="control">
                    <label class="label">Caption</label>
                    <textarea v-model="form.caption"></textarea>
                    <span class="help is-danger" v-if="form.errors.has('caption')" v-text="form.errors.get('caption')"></span>
                </p>

                <br/>

                <p class="control">
                    <button type="submit" class="button is-dark" :disabled="form.errors.any()">Submit</button>
                </p>
            </form>
            <figure v-if="form.image" class="imageform is-4by3">
              <img :src="form.image" alt="image">
            </figure>
        </div>

    </div>



</div>
</template>

<script>


    export default {


        data() {

            return {

                form: new Form({
                        image: '',
                        neighborhood: '',
                        decade: '',
                        caption: ''
                })
            }

        },

        methods: {
            onSubmit() {
                //submit an ajax request to the server

                this.form.post('/photos').then(photo => this.$emit('completed', photo))
            },

            clearImgField(){
                this.form.image = ''
            }
        }

    }
</script>
