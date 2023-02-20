function test() {

  
 var nom=document.getElementById("nom").value;
 var prenom=document.getElementById("prenom").value;
 var cmotdepasse=document.getElementById("cmotdepasse").value;
 var motdepasse=document.getElementById("motdepasse").value;
 var tel=document.getElementById("tel").value;
 var choix= document.getElementById("choix").value;
var A=nom.charAt(0).toUpperCase();
var B=prenom.charAt(0).toUpperCase();
var t=0,t1=0,i=0;

    if(nom.charAt(0)===A)
         t++; 
        if(prenom.charAt(0)===B)
         t1++;

if((t!==0)&&(t1!==0)&&((motdepasse===cmotdepasse)&&(motdepasse.length!=0))&&(tel.length==8))
{   
  alert("Bienvenu"+" "+nom+" "+prenom+"\n");
}
else {

  document.write("<table border=1>");
  document.write("<tr>");
  document.write("<td>");
  document.write("<br/>");
document.write("<h1>Votre formulaire n'est pas correcte");
    
document.write("<ul style=color:red>") ;
 if(choix==="0")
    document.write("<li>Veuillez indiquer votre ville</li>");

if(t===0||nom.length==0)
    document.write("<li>Le nom doit commencer par une lettre majuscule</li>"); 
if(t1===0||prenom.length==0)
    document.write("<li>le prenom doit commencer par une lettre majuscule</li>"); 
if((motdepasse!=cmotdepasse)||(length.cmotdepasse==0))
   document.write("<li>Veuillez verifier le mot de passe saisi</li>");
if(tel.length!==8)
    document.write("<li>Numéro de téléphone erroné </li>"); 



      document.write("</ul>");
       
       document.write("</table>");
       document.write("</td>");
  document.write("</tr>");
  }

}

 <td>
                 <div id="editUserPopover" data-toggle="popover" data-placement="left" title="<div class='d-flex align-items-center'>Edit user <a href='#!' class='text-white ml-auto'><i id='closeEditUserPopover' class='tio-clear'></i></a></div>" data-content="Check out this Edit user modal example." data-html="true">
                      <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                        <i class="tio-edit"></i> Edit
                      </a>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck2">
                      <label class="custom-control-label" for="usersDataCheck2"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">A</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Anne Richard</span>
                        <span class="d-block font-size-sm text-body">anne@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Seller</span>
                    <span class="d-block font-size-sm">Branding products</span>
                  </td>
                  <td>United States <span class="text-hide">Code: US</span></td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">24%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck3">
                      <label class="custom-control-label" for="usersDataCheck3"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">David Harrison</span>
                        <span class="d-block font-size-sm text-body">david@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Unknown</span>
                    <span class="d-block font-size-sm">Unknown</span>
                  </td>
                  <td>United States <span class="text-hide">Code: US</span></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Active
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">100%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck4">
                      <label class="custom-control-label" for="usersDataCheck4"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img5.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Finch Hoot</span>
                        <span class="d-block font-size-sm text-body">finch@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Designer</span>
                    <span class="d-block font-size-sm">IT department</span>
                  </td>
                  <td>Argentina <span class="text-hide">Code: AR</span></td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Suspended
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">50%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck5">
                      <label class="custom-control-label" for="usersDataCheck5"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">B</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Bob Dean</span>
                        <span class="d-block font-size-sm text-body">bob@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Executive director</span>
                    <span class="d-block font-size-sm">Marketing</span>
                  </td>
                  <td>Austria <span class="text-hide">Code: AT</span></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Active
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">5%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck6">
                      <label class="custom-control-label" for="usersDataCheck6"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img9.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Ella Lauda <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                        <span class="d-block font-size-sm text-body">ella@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Co-founder</span>
                    <span class="d-block font-size-sm">All departments</span>
                  </td>
                  <td>United Kingdom <span class="text-hide">Code: GB</span></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Active
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">100%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Owner</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck7">
                      <label class="custom-control-label" for="usersDataCheck7"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-info avatar-circle">
                        <span class="avatar-initials">L</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Lori Hunter</span>
                        <span class="d-block font-size-sm text-body">hunter@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Developer</span>
                    <span class="d-block font-size-sm">Mobile app</span>
                  </td>
                  <td>Estonia <span class="text-hide">Code: EE</span></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Active
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">100%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck16">
                      <label class="custom-control-label" for="usersDataCheck16"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">M</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Mark Colbert</span>
                        <span class="d-block font-size-sm text-body">mark@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Executive director</span>
                    <span class="d-block font-size-sm">Human resources</span>
                  </td>
                  <td>Canada <span class="text-hide">Code: CA</span></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Active
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">90%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck9">
                      <label class="custom-control-label" for="usersDataCheck9"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Costa Quinn</span>
                        <span class="d-block font-size-sm text-body">costa@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Co-founder</span>
                    <span class="d-block font-size-sm">All departments</span>
                  </td>
                  <td>France <span class="text-hide">Code: FR</span></td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">83%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 83%" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Owner</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck10">
                      <label class="custom-control-label" for="usersDataCheck10"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-danger avatar-circle">
                        <span class="avatar-initials">R</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Rachel Doe <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                        <span class="d-block font-size-sm text-body">rachel@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Accountant</span>
                    <span class="d-block font-size-sm">Finance</span>
                  </td>
                  <td>United States <span class="text-hide">Code: US</span></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Active
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">30%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck11">
                      <label class="custom-control-label" for="usersDataCheck11"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img8.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Linda Bates</span>
                        <span class="d-block font-size-sm text-body">linda@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Unknown</span>
                    <span class="d-block font-size-sm">Unknown</span>
                  </td>
                  <td>United Kingdom <span class="text-hide">Code: UK</span></td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Suspended
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">0%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck12">
                      <label class="custom-control-label" for="usersDataCheck12"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-info avatar-circle">
                        <span class="avatar-initials">B</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Brian Halligan</span>
                        <span class="d-block font-size-sm text-body">brian@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Director</span>
                    <span class="d-block font-size-sm">Accounting</span>
                  </td>
                  <td>France <span class="text-hide">Code: FR</span></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Active
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">71%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 71%" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck13">
                      <label class="custom-control-label" for="usersDataCheck13"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">C</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Chris Mathew</span>
                        <span class="d-block font-size-sm text-body">chris@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Developer</span>
                    <span class="d-block font-size-sm">Mobile app</span>
                  </td>
                  <td>Switzerland <span class="text-hide">Code: CH</span></td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">0%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck14">
                      <label class="custom-control-label" for="usersDataCheck14"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img7.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Clarice Boone <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                        <span class="d-block font-size-sm text-body">clarice@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Seller</span>
                    <span class="d-block font-size-sm">Branding products</span>
                  </td>
                  <td>United Kingdom <span class="text-hide">Code: UK</span></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Active
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">37%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck15">
                      <label class="custom-control-label" for="usersDataCheck15"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">L</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Lewis Clarke</span>
                        <span class="d-block font-size-sm text-body">lewis@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Co-founder</span>
                    <span class="d-block font-size-sm">IT department</span>
                  </td>
                  <td>Switzerland <span class="text-hide">Code: CH</span></td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">100%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Owner</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck8">
                      <label class="custom-control-label" for="usersDataCheck8"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img4.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Sam Kart</span>
                        <span class="d-block font-size-sm text-body">sam@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Designer</span>
                    <span class="d-block font-size-sm">Branding</span>
                  </td>
                  <td>Canada <span class="text-hide">Code: CA</span></td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">7%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck17">
                      <label class="custom-control-label" for="usersDataCheck17"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-danger avatar-circle">
                        <span class="avatar-initials">J</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Johnny Appleseed</span>
                        <span class="d-block font-size-sm text-body">johnny@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Accountant</span>
                    <span class="d-block font-size-sm">Human resources</span>
                  </td>
                  <td>United States <span class="text-hide">Code: US</span></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Active
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">80%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck18">
                      <label class="custom-control-label" for="usersDataCheck18"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-danger avatar-circle">
                        <span class="avatar-initials">P</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Phileas Fogg</span>
                        <span class="d-block font-size-sm text-body">phileas@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Designer</span>
                    <span class="d-block font-size-sm">Branding</span>
                  </td>
                  <td>Spain <span class="text-hide">Code: ES</span></td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Suspended
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">46%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck19">
                      <label class="custom-control-label" for="usersDataCheck19"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description">
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Mark Williams <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                        <span class="d-block font-size-sm text-body">mark@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Co-founder</span>
                    <span class="d-block font-size-sm">Branding</span>
                  </td>
                  <td>United Kingdom <span class="text-hide">Code: GB</span></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Active
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">100%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Owner</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck20">
                      <label class="custom-control-label" for="usersDataCheck20"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">T</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Timothy Silva</span>
                        <span class="d-block font-size-sm text-body">timothy@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Developer</span>
                    <span class="d-block font-size-sm">Mobile app</span>
                  </td>
                  <td>Italy <span class="text-hide">Code: IT</span></td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">12%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck21">
                      <label class="custom-control-label" for="usersDataCheck21"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">G</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Gary Bishop <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                        <span class="d-block font-size-sm text-body">gary@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Developer</span>
                    <span class="d-block font-size-sm">Mobile app</span>
                  </td>
                  <td>Latvia <span class="text-hide">Code: LV</span></td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Active
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">50%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck22">
                      <label class="custom-control-label" for="usersDataCheck22"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">Y</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Yorker Scogings</span>
                        <span class="d-block font-size-sm text-body">yorker@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Seller</span>
                    <span class="d-block font-size-sm">Branding products</span>
                  </td>
                  <td>Norway <span class="text-hide">Code: NO</span></td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Suspended
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">49%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 49%" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck23">
                      <label class="custom-control-label" for="usersDataCheck23"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-info avatar-circle">
                        <span class="avatar-initials">F</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Frank Phillips</span>
                        <span class="d-block font-size-sm text-body">frank@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Unknown</span>
                    <span class="d-block font-size-sm">Unknown</span>
                  </td>
                  <td>Norway <span class="text-hide">Code: NO</span></td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Suspended
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">3%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 3%" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>
                  <td>
                    <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#editUserModal">
                      <i class="tio-edit"></i> Edit
                    </a>
                  </td>
                </tr>
                 <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck24">
                      <label class="custom-control-label" for="usersDataCheck24"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="user-profile.html">
                      <div class="avatar avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">E</span>
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">Elizabeth Carter</span>
                        <span class="d-block font-size-sm text-body">eliz@example.com</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">Unknown</span>
                    <span class="d-block font-size-sm">Unknown</span>
                  </td>
                  <td>United States <span class="text-hide">Code: UK</span></td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-2">95%</span>
                      <div class="progress table-progress">
                        <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td>Employee</td>