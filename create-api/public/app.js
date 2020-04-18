new Vue({
    el: "#app",
    methods: {
        handleClick() {
            axios.get("http://localhost:8000/api/customers").then(res => {
                console.log(res.data.data);
            });
        }
    }
});
