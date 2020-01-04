<template>
<div>

    <div class="message is-light">
        <div class="message-header is-light">
            Upload Your Photos
        </div>
        <div class ="message-body is-light">
            <form @submit.prevent="onSubmit">
                <p class="control">
                    <label class="label">Image URL</label>
                    <input type="text" v-model="image">
                </p>

                <p class="control">
                    <label class="label">Neighborhood</label>
                    <select v-model="selectedhood">
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
                </p>

                <p class="control">
                    <label class="label">Decade</label>
                    <select v-model="selecteddecade">
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
                </p>

                <p class="control">
                    <label class="label">Caption</label>
                    <textarea v-model="caption"></textarea>
                </p>

                <br/>

                <p class="control">
                    <button class="button is-dark">Submit</button>
                </p>


            </form>

        </div>
    </div>



</div>
</template>

<script>


    export default {

        data: {

            selectedhood: '',
            selecteddecade: ''
        },

    }
</script>
