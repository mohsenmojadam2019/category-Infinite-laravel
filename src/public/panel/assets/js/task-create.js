(()=>{"use strict";function e(e){if(!e.id)return e.text;var t=$('<span class="status-indicator projects">'+e.text+"</span>"),s=t.text().split(" ").join("").toLowerCase();return"inprogress"===s?t.addClass("in-progress"):"onhold"===s?t.addClass("on-hold"):"completed"===s?t.addClass("completed"):t.addClass("empty"),t}function t(){$(".select2-status-search").select2({templateResult:e,templateSelection:e,escapeMarkup:function(e){return e}})}function s(e){return e.id?$('<span><img src="https://laravel8.spruko.com/noa/assets/images/users/'+e.element.value.toLowerCase()+'.jpg" class="rounded-circle avatar-sm" /> '+e.text+"</span>"):e.text}var c,a,n,d;function o(e,t,s){e.addEventListener("click",(function(){1==t.checked?s.classList.add("d-none"):s.classList.remove("d-none")}))}$((function(){$("#date1-datepicker").datepicker({autoclose:!0,format:"dd-mm-yyyy",todayHighlight:!0}).datepicker("update",new Date),$("#date2-datepicker").datepicker({autoclose:!0,format:"dd-mm-yyyy",todayHighlight:!0}).datepicker("update",""),$("#date3-datepicker").datepicker({autoclose:!0,format:"dd-mm-yyyy",todayHighlight:!0}).datepicker("update","")})),$(".select2").select2({minimumResultsForSearch:1/0,width:"100%"}),$(".select2-show-search").select2({minimumResultsForSearch:"",width:"100%"}),t(),$(".select2-client-search").select2({templateResult:s,templateSelection:s,escapeMarkup:function(e){return e}}),$(".select2-assignTo-search").select2({templateResult:s,templateSelection:s,escapeMarkup:function(e){return e}}),o(document.querySelector(".no-taskEnd-checkbox-container"),document.querySelector(".no-taskEnd-date-checkbox"),document.querySelector(".task-endDate-container")),o(document.querySelector(".st-ed-ckbx-c"),document.querySelector(".st-ed-ckbx-m"),document.querySelector(".st-ed-el")),c=document.querySelector(".other-details"),a=document.querySelector(".other-details-main"),n=document.querySelector(".up-arrow"),d=document.querySelector(".down-arrow"),c.addEventListener("click",(function(){a.classList.contains("d-none")?(a.classList.remove("d-none"),n.classList.remove("d-none"),d.classList.add("d-none"),t()):(a.classList.add("d-none"),n.classList.add("d-none"),d.classList.remove("d-none"))})),n.classList.add("d-none");var r,l,i=document.querySelector(".task-depended-container"),u=document.querySelector(".task-depended-checkbox"),m=document.querySelector(".depended-task-main");r=u,l=m,i.addEventListener("click",(function(){1==r.checked?l.classList.remove("d-none"):l.classList.add("d-none")}))})();