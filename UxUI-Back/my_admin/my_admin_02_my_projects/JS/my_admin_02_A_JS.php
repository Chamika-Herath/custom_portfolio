<script type="text/javascript">
function my_admin_02_LOAD_LIST() {
    console.log("Triggering Asynchronous Database Sync...");
    
    $.ajax({
        url: "<?php echo $pth; ?>View-List/Projects/Load_Project_List.php",
        type: "POST",
        success: function(response) {
            document.getElementById("project_list_body").innerHTML = response;
        },
        error: function(xhr, status, error) {
            document.getElementById("project_list_body").innerHTML = `<tr><td colspan="4" style="text-align:center; padding: 40px; color:red;">Network Connectivity Error: Failed to hit API endpoint.</td></tr>`;
        }
    });
}

// // Auto-boot list on script load
// setTimeout(() => {
//     my_admin_02_LOAD_LIST();
// }, 200);
</script>
