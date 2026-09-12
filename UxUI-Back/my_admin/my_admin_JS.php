<script type="text/javascript">
    function setSidebarActive(pageName) {
        document.querySelectorAll('.hera-sidebar-nav-item').forEach(function(item){
            item.classList.toggle('hera-sidebar-active', item.getAttribute('data-page') === pageName);
        });
    }

    function my_admin_close_all() {
        document.getElementById("my_admin_01_A").style.display = "none";
        document.getElementById("my_admin_02_A").style.display = "none";
        document.getElementById("my_admin_02_B").style.display = "none";
        document.getElementById("my_admin_02_C").style.display = "none";
        document.getElementById("my_admin_03_A").style.display = "none";
        document.getElementById("my_admin_03_B").style.display = "none";
        document.getElementById("my_admin_03_C").style.display = "none";
        
        
       
        
        
       
    }

    function my_admin_01_A_OPEN() { 
        //alert("Dashboard");
        my_admin_close_all();
        document.getElementById("my_admin_01_A").style.display = "";
        setSidebarActive('dashboard');
       // my_admin_02_LOAD_LIST();
    }

    function my_admin_02_A_OPEN() { 
        //alert("My Projects");
        my_admin_close_all();
        document.getElementById("my_admin_02_A").style.display = "";
        setSidebarActive('projects');
        my_admin_02_LOAD_LIST();
    }

    function my_admin_02_B_OPEN() { 
        //alert("Add New Project");
        my_admin_close_all();
        document.getElementById("my_admin_02_B").style.display = "";
        setSidebarActive('projects');
       
    }

    function my_admin_02_C_OPEN() { 
        //alert("Edit Project");
        my_admin_close_all();
        document.getElementById("my_admin_02_C").style.display = "";
        setSidebarActive('projects');
    }

    function my_admin_03_A_OPEN() { 
        //alert("Blogs");
        my_admin_close_all();
        document.getElementById("my_admin_03_A").style.display = "";
        setSidebarActive('blogs');
    }

    function my_admin_03_B_OPEN() { 
        //alert("Add Blog");
        my_admin_close_all();
        document.getElementById("my_admin_03_B").style.display = "";
        setSidebarActive('blogs');
    }

    function my_admin_03_C_OPEN() { 
        //alert("Edit Blog");
        my_admin_close_all();
        document.getElementById("my_admin_03_C").style.display = "";
        setSidebarActive('blogs');
    }

   
   
    

    
</script>