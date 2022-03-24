<div id="product"></div>

<script>
    // reloadTable()
    myFunction();
    console.log("masuk");

    function myFunction() {
        function reloadTable() {
            $.ajax({
                url: "/monitor/dashboardatas",
                beforeSend: function(f) {
                    $('#product').html('Load Table ...');
                },
                success: function(data) {
                    console.log(data)
                    $('#product').html(data);
                }
            })
        }
    }
</script>