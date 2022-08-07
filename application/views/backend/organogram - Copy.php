
<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>



<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">&nbsp Organogram</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Organogram</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
    <section class="col-lg-12 connectedSortable">
        <div class="row m-b-10"> 
            <div class="col-12">
                <a class="btn btn-primary text-white "><i class="fa fa-bars"></i> MANAGEMENT </a>
                <a href='<?=base_url()?>organization/hrOrganogram' class="btn btn-info text-white "><i class="fa fa-bars"></i> HUMAN RESOURCES </a>
                <a href='<?=base_url()?>organization/adminOrganogram' class="btn btn-info text-white "><i class="fa fa-bars"></i> ADMIN </a>
                <a href='<?=base_url()?>organization/accountOrganogram' class="btn btn-info text-white "><i class="fa fa-bars"></i> ACCOUNT </a>
                <a href='<?=base_url()?>organization/account1Organogram' class="btn btn-info text-white "><i class="fa fa-bars"></i> ACCOUNT 2 </a>
            </div>
            
        </div> 
            <div class="card">
            
            <div class="card-body canvas" style="height: 100vh">
              <!-- <button class="addEmployee" id="btn">Add Employee<span></span> </button> -->
              <!-- <h3 style="text-decoration:underline">Management</h3> -->
              <div style="width:100%; height:100%;" id="tree"></div>
            </div>
          </section>
          <style>
            button.addEmployee{
              width:150px; height:40px; border-radius:10px; color:#fff; background-color:#FF8500; font-weight:bold; font-size:15px; outline:none; border:none;position: absolute;
              top: 30px; z-index: 2;display: flex;align-items: center;justify-content: space-around;overflow:hidden;transition: all .3s linear;
            }
            button.addEmployee > span:after{
              content: '+';font-size:20px;width: 20px;height: 20px;background-color: #fff;color: #FF8500;border-radius: 50%;display: flex;align-items: center;justify-content: center;
            }
            button.addEmployee:hover{
                width:180px;
            }
            button.addEmployee:hover >span:after{
              font-size:28px;
              width:50px;
              background-color: #fff;
                height: 50px;transition: all .3s .3s ease;
            }
          </style>
        
    </div>
    
  
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
</div>

    <script>
        
     OrgChart.templates.ana.menuButton =
        '<div style="position:absolute;right:{p}px;top:{p}px; width:40px;height:50px;cursor:pointer;" data-ctrl-menu="">'
        + '<hr style="background-color: rgb(255, 202, 40); height: 3px; border: none;">'
        + '<hr style="background-color: rgb(255, 202, 40); height: 3px; border: none;">'
        + '<hr style="background-color: rgb(255, 202, 40); height: 3px; border: none;">'
        + '</div>';
        OrgChart.templates.anaOrange = Object.assign({}, OrgChart.templates.mila);
        OrgChart.templates.anaBlue = Object.assign({}, OrgChart.templates.mila);
        OrgChart.templates.anaOrange.editFormHeaderColor = '#FFB600';
        OrgChart.templates.anaBlue.editFormHeaderColor = '#004080';
        OrgChart.templates.subtree = Object.assign({}, OrgChart.templates.mila);
        // OrgChart.templates.anaBlue = Object.assign({}, OrgChart.templates.mila);
            // OrgChart.templates.anaOrange.editFormHeaderColor = '#FFB600';
            // OrgChart.templates.anaBlue.editFormHeaderColor = '#004080';


            // OrgChart.templates.myTemplate= 
            //     '<text data-width="200" data-text-overflow="multiline" style="font-size: 14px;" fill="#ffffff" x="280" y="30" text-anchor="end">{val}</text>';
            // OrgChart.templates.mila.pointer = ''
            
            // OrgChart.templates.mila.node = '<rect x="0" y="0" height="120" width="250" fill="#039BE5" stroke-width="1" stroke="#000000"></rect>'
            // <rect x="-5" y="70" height="30" width="260" fill="#ffffff" stroke-width="1" stroke="#000000"></rect>';
            // OrgChart.templates.ana.pointer =
            //   '<g data-pointer="pointer" transform="matrix(0,0,0,0,100,100)">><g transform="matrix(0.3,0,0,0.3,-17,-17)">'
            //   + '<polygon fill="rgb(255, 202, 40)" points="53.004,173.004 53.004,66.996 0,120" />'
            //   + '<polygon fill="rgb(255, 202, 40)" points="186.996,66.996 186.996,173.004 240,120" />'
            //   + '<polygon fill="rgb(255, 202, 40)" points="66.996,53.004 173.004,53.004 120,0" />'
            //   + '<polygon fill="rgb(255, 202, 40)" points="120,240 173.004,186.996 66.996,186.996" />'
            //   + '<circle fill="rgb(255, 202, 40)" cx="120" cy="120" r="30" />'
            //   + '</g></g>';
            // <text data-width="200" data-text-overflow="multiline" style="font-size: 14px;width: 100%;data-width: 200px;" fill="#ffffff" x="280" y="30" text-anchor="end"><tspan x="150" y="30" text-anchor="beginning">Technical Support /</tspan><tspan x="240" y="30" text-anchor="beginning">Product Devt.</tspan></text>

        OrgChart.MIXED_LAYOUT_ALL_NODES = false;
        var chart = new OrgChart(document.getElementById("tree"), {
                mouseScrool: OrgChart.action.zoom,
                showXScroll: OrgChart.scroll.visible,
                showYScroll: OrgChart.scroll.visible,
                layout: OrgChart.tree,
                // layout: OrgChart.mixed,
                template: "mila",
                scaleInitial: OrgChart.match.boundary,
                enableSearch: false,
                // scaleInitial: 0.7,
                tags:{
            	orange:{
                    template: 'anaOrange'
                },
            	blue:{
                    template: 'anaBlue'
                }, 
                "subLevels1": {
                    subLevels: 1
                },
                "subLevels2": {
                    subLevels: 2
                },
                "subLevels3": {
                    subLevels: 3
                },
                "subLevels4": {
                    subLevels: 4
                },
                "subLevels5": {
                    subLevels: 5
                },
                "subLevels6": {
                    subLevels: 6
                },
                "subLevels7": {
                    subLevels: 7
                },
                "subtree0": {
                    template: "subtree0",
                },
                // "assistant": {
                //     template: "ula"
                // }
            },
                nodeBinding: {
                    field_0: "name",
                    field_1: "title",
                    img_0: "img"
                },
                nodeMenu: {
                details: { text: "Details" },
                edit: { text: "Edit" },
                add: { text: "Add" },
                remove: { text: "Remove" }
            },
                nodes: [
                    { id: 1, name: "Adekunle Adedigba", title: "Chairman", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png", tags: ['orange'] },
                    { id: 2, pid: 1, name: "Sam Omajala", title: "General Manager - Golden Tulip Ibadan & Five Continents", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png" ,tags: ['blue', "subLevels0", "subtree"]  },
                    { id: 3, pid: 1, name: "Mardiyyah Adegoke", title: "Manager, Human Capital & Admin", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png", tags: ['blue', "subLevels0", "subtree"] },
                    
                    { id: 5, pid: 2, name: "Abayomi Obaseesin", title: "Head, Maintanance Ibadan", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png" ,tags: ['blue', "subtree"]  },
                    { id: 6, pid: 9, name: "Rumbi Nazare", title: "Operation Manager - Golden Tulip Oniru & Rhodax Court", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png" ,tags: ['blue', "subtree"]  },
                    { id: 7, pid: 9, name: "Tope Oriowo", title: "Head, Maintanance Ibadan", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png" ,tags: ['blue']  },
                    { id: 8, pid: 1, name: "Vacant", title: "Head, Projects", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png",tags: ['blue', "subLevels1", "subtree"]   },
                    { id: 9, pid: 1, name: "Nelson Rolad", title: "General Manager - Golden Tulip Oniru Suites & Lekki", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png",tags: ['blue', "subLevels2", "subtree"]   },
                    { id: 10, pid: 1, name: "Luqman Asimolowo", title: "Chief Financial Officer", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png" ,tags: ['blue', "subLevels3", "subtree"]  },
                    { id: 11, pid: 1, name: "Emmanuel Okolo", title: "Head, Strategy & Corporate Devt.", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png",tags: ['blue', "subLevels4", "subtree"]   },
                    { id: 12, pid: 1, name: "Vacant", title: "Facility Manager - Golden Tulip Residences", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png",tags: ['blue', "subLevels5", "subtree"]   },
                    { id: 13, pid: 1, name: "Joseph Ushaile", title: "Manager, Standards & Measures", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png",tags: ['blue', "subLevels6", "subtree"]   },
                    { id: 14, pid: 1, name: "Vacant", title: "Head, Internal Audit & Cost Control", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png",tags: ['blue', "subLevels7", "subtree"]   }
                    // { id: 8, pid: 4, name: "Adetola Oyebode", title: "Frontend Developer", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png",tags: ['blue']   },
                    // { id: 9, pid: 6, name: "Vacant", title: "Front Desk", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png" ,tags: ['blue']  },
                    // { id: 10, pid: 5, name: "Vacant", title: "Technical Team 1", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png" ,tags: ['blue']  },
                    // { id: 11, pid: 5, name: "Vacant", title: "Technical Team 2", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png" ,tags: ['blue']  },
                    // { id: 12, pid: 10, name: "Ochiabuto Jideofor", title: "Intern (PHP Developer)", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png" ,tags: ['blue']  },
                    // { id: 13, pid: 9, name: "Sunday Ojo", title: "Driver", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png",tags: ['blue']   },
                    // { id: 14, pid: 9, name: "Blessing Emmanuel", title: "Office Assistant", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png" ,tags: ['blue']  },
                    // { id: 15, pid: 8, name: "Vacant", title: "Intern", img:"<?php echo base_url(); ?>assets/images/users/oma1601.png" ,tags: ['blue']  },
                ]
            });
            
            // var newNodes = [
            //     { id: 16, pid: 8, name: "Jakes", title: "Intern"  },
            //     { id: 17, pid: 8, name: "Lynn Hussain", title: "Sales" },
            //     { id: 18, pid: 9, name: "Tanner May", title: "Developer" },
            //     { id: 19, pid: 10, name: "Fran Parsons", title: "Developer" }
            // ];

            document.getElementById("btn").addEventListener("click", function () {                
                // var n = newNodes.splice(0, 1)[0];
                // chart.addNode(n);

                if (newNodes.length == 0) {
                    this.style.display = "none";
                }
            });
    </script>

    </div>

</div>
<script>
  

</script>   

<?php $this->load->view('backend/footer'); ?>
