(()=>{function e(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}document.addEventListener("DOMContentLoaded",(function(){var t,n=document.getElementById("external-events");new FullCalendar.Draggable(n,{itemSelector:".fc-event",eventData:function(t){var n;return e(n={title:t.innerText.trim()},"title",t.innerText),e(n,"className",t.className+" overflow-hidden "),n}});var a=document.getElementById("calendar2"),i=new FullCalendar.Calendar(a,(e(t={headerToolbar:{left:"prev,next today",center:"title",right:"dayGridMonth,timeGridWeek,timeGridDay,listMonth"},defaultView:"month",navLinks:!0,businessHours:!0,editable:!0,selectable:!0,selectMirror:!0,droppable:!0,select:function(e){var t=prompt("Event Title:");t&&i.addEvent({title:t,start:e.start,end:e.end,allDay:e.allDay}),i.unselect()},eventClick:function(e){confirm("Are you sure you want to delete this event?")&&e.event.remove()}},"editable",!0),e(t,"dayMaxEvents",!0),e(t,"events",[{title:"Business Lunch",start:"2021-10-03T13:00:00",constraint:"businessHours"},{title:"Meeting",start:"2021-10-13T11:00:00",constraint:"availableForMeeting",color:"#38cab3"},{title:"Conference",start:"2021-10-18",end:"2021-10-20",color:"#f74f75"},{title:"Party",start:"2021-11-29T20:00:00",color:"#ffbd5a"},{id:"availableForMeeting",start:"2021-10-11T10:00:00",end:"2021-10-11T16:00:00",rendering:"background",color:"#f34343"},{id:"availableForMeeting",start:"2021-10-13T10:00:00",end:"2021-10-13T16:00:00",rendering:"#4ec2f0"},{title:"Jyo birthday",id:"Jyo birthday",start:"2021-12-19T10:00:00",end:"2021-12-19T16:00:00",rendering:"#4ec2f0"},{title:"Chandu birthday",id:"Jyo birthday",start:"2021-11-30T10:00:00",end:"2021-11-30T16:00:00",rendering:"#4ec2f0"}]),t));i.render()})),document.addEventListener("DOMContentLoaded",(function(){var e=document.getElementById("calendar");new FullCalendar.Calendar(e,{height:"auto",headerToolbar:{left:"prev,next today",center:"title",right:"listDay,listWeek"},views:{listDay:{buttonText:"list day"},listWeek:{buttonText:"list week"}},initialView:"listWeek",initialDate:"2021-07-12",navLinks:!0,editable:!0,eventLimit:!0,dayMaxEvents:!0,events:[{title:"All Day Event",start:"2021-11-01"},{title:"Long Event",start:"2019-11-07",end:"2021-10-10"},{id:999,title:"Repeating Event",start:"2021-11-09T16:00:00"},{id:999,title:"Repeating Event",start:"2021-11-16T16:00:00"},{title:"Conference",start:"2019-11-11",end:"2021-11-13"},{title:"Meeting",start:"2019-11-12T10:30:00",end:"2021-11-12T12:30:00"},{title:"Lunch",start:"2021-11-12T12:00:00"},{title:"Meeting",start:"2021-11-12T14:30:00"},{title:"Happy Hour",start:"2021-11-12T17:30:00"},{title:"Dinner",start:"2021-11-12T20:00:00"},{title:"Birthday Party",start:"2021-11-13T07:00:00"},{title:"Click for Google",url:"http://google.com/",start:"2021-11-28"}]});$(".select2").select2({minimumResultsForSearch:1/0,width:"100%"}),$(".select2-show-search").select2({minimumResultsForSearch:"",width:"100%"})}))})();