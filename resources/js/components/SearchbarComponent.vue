<template>
  <div class="relative mt-3 md:mt-0 search">
    <input
      v-model="query"
      @keyup="getResult(query)"
      class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline search_input"
      placeholder="Search Movies..."
    />
    <div class="absolute top-0">
      <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24">
        <path
          class="heroicon-ui"
          d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"
        />
      </svg>
    </div>
    <div class="search-list absolute bg-gray-800 rounded mt-3">
      <div
        v-show="query && apiLoaded"
        @click="selectItem(result)"
        class="border-b border-gray-700 dropdown-item bg-gray-800"
        v-for="result in results.slice(0, 10)"
        :key="result.id"
      >
        <a
          :href="URL('/movies/')+ result.id"
          class=" hover:bg-gray-700 px-3 py-3 flex items-center"
        >
          <img v-bind:src="'http://image.tmdb.org/t/p/w92/' +    result.poster_path" class="w-8" />
          <span class="ml-4">{{result.title}}</span>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      query: "",
      results: "",
      selecteItem: "",
      apiLoaded: false
    };
  },

  methods: {
    selectItem(theItem) {
      this.selectedItem = theItem;
      this.query = "";
      this.$emit("on-item-selected", theItem);
    },
    getResult(query) {
      axios
        .get(
          "https://api.themoviedb.org/3/search/movie?api_key=af01ac3e86bae1ffd464d0687ad2fb8a&language=en-US&query=" +
            query
        )
        .then(response => {
          this.results = response.data.results;
          this.apiLoaded = true;
        });
    }
  }
};
</script>
