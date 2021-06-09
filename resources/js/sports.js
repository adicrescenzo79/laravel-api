let app = new Vue({
  el: '#root',
  data:{
    sports: [],
    api_token: '34RwbKYJk8uuJN4XDknCahETEq5RVYJ410fW3HbFVYJqqjsvb9NJKGSCAgOkOjSGnftGjPFK9XXZo3DB'
  },
  created(){
    axios.get('http://localhost:8000/api/sports',{
      params:{
        api_key: this.api_token
      }
    }).then((response)=>{
      this.sports = response.data.data;
      // console.log(response.data.data);
    })
  }
});
