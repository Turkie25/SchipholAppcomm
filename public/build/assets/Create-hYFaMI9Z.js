import{aO as l,H as d,I as o,bJ as n,bz as m,bM as a}from"./@vue-BBkUCyJZ.js";import{u as p}from"./@inertiajs-DNyfrMdC.js";import{_ as u}from"./_plugin-vue_export-helper-DlAUqK2U.js";import"./axios-BimPEqV4.js";import"./deepmerge-DndG8tr0.js";import"./qs-CavB67Wm.js";import"./side-channel-CnlZqT8T.js";import"./get-intrinsic-BKEvijrG.js";import"./es-errors-DzOT6E3C.js";import"./has-symbols-eVqrYdw7.js";import"./has-proto-JnoBQRdH.js";import"./function-bind-BbkWVFrm.js";import"./hasown-DYqjtFKE.js";import"./call-bind-Bt3bzbWQ.js";import"./set-function-length-B5OANX0j.js";import"./define-data-property-DO9o5wXF.js";import"./es-define-property-tzmkNPou.js";import"./gopd-CEkvUycD.js";import"./has-property-descriptors-DphFXkuo.js";import"./object-inspect-99D2UxiI.js";import"./nprogress-BedIGjwA.js";import"./lodash.clonedeep-Dt_-FK94.js";import"./lodash.isequal-CQLP44EO.js";import"./vue-MimuCPU0.js";const f={props:{},setup(){const e=p({name:"",description:"",location:"",duration:"",capacity:"",start_time:"",end_time:""});function t(){e.post(route("dashboard.Events.store"))}return{form:e,submit:t}}};function s(e,t,b,i,v,y){return l(),d("div",null,[t[16]||(t[16]=o("h1",null,"Create Event",-1)),o("form",{onSubmit:t[7]||(t[7]=a((...r)=>i.submit&&i.submit(...r),["prevent"]))},[o("div",null,[t[8]||(t[8]=o("label",{for:"name"},"Name",-1)),n(o("input",{type:"text","onUpdate:modelValue":t[0]||(t[0]=r=>i.form.name=r),id:"name",required:""},null,512),[[m,i.form.name]])]),o("div",null,[t[9]||(t[9]=o("label",{for:"description"},"Description",-1)),n(o("textarea",{"onUpdate:modelValue":t[1]||(t[1]=r=>i.form.description=r),id:"description",required:""},null,512),[[m,i.form.description]])]),o("div",null,[t[10]||(t[10]=o("label",{for:"location"},"Location",-1)),n(o("input",{type:"text","onUpdate:modelValue":t[2]||(t[2]=r=>i.form.location=r),id:"location",required:""},null,512),[[m,i.form.location]])]),o("div",null,[t[11]||(t[11]=o("label",{for:"duration"},"Duration",-1)),n(o("input",{type:"text","onUpdate:modelValue":t[3]||(t[3]=r=>i.form.duration=r),id:"duration",required:""},null,512),[[m,i.form.duration]])]),o("div",null,[t[12]||(t[12]=o("label",{for:"capacity"},"Capacity",-1)),n(o("input",{type:"number","onUpdate:modelValue":t[4]||(t[4]=r=>i.form.capacity=r),id:"capacity",required:""},null,512),[[m,i.form.capacity]])]),o("div",null,[t[13]||(t[13]=o("label",{for:"start_time"},"Start Time",-1)),n(o("input",{type:"datetime-local","onUpdate:modelValue":t[5]||(t[5]=r=>i.form.start_time=r),id:"start_time",required:""},null,512),[[m,i.form.start_time]])]),o("div",null,[t[14]||(t[14]=o("label",{for:"end_time"},"End Time",-1)),n(o("input",{type:"datetime-local","onUpdate:modelValue":t[6]||(t[6]=r=>i.form.end_time=r),id:"end_time",required:""},null,512),[[m,i.form.end_time]])]),t[15]||(t[15]=o("button",{type:"submit"},"Create Event",-1))],32)])}const G=u(f,[["render",s]]);export{G as default};
