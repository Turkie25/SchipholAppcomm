import{b as g,o as m,l,j as e,u as o,g as i,F as y,i as r,n as v,t as x,p as n,x as b}from"./@vue-C6Pz2u6y.js";import{T as h,Z as _,i as u}from"./@inertiajs-CRLoyQn2.js";import{A as k}from"./AuthenticationCard-sGBiQpo6.js";import{_ as w}from"./AuthenticationCardLogo-jhoiqoWz.js";import{_ as V}from"./PrimaryButton-1msuHj2O.js";import"./axios-BimPEqV4.js";import"./deepmerge-CtOfIP5S.js";import"./call-bind-aBC2DkHY.js";import"./get-intrinsic-BKEvijrG.js";import"./es-errors-DzOT6E3C.js";import"./has-symbols-eVqrYdw7.js";import"./has-proto-JnoBQRdH.js";import"./function-bind-BbkWVFrm.js";import"./hasown-DYqjtFKE.js";import"./set-function-length-B5OANX0j.js";import"./define-data-property-DO9o5wXF.js";import"./es-define-property-tzmkNPou.js";import"./gopd-CEkvUycD.js";import"./has-property-descriptors-DphFXkuo.js";import"./qs-Bgg5YRNC.js";import"./side-channel-CbjMffun.js";import"./object-inspect-8Tg_cmh0.js";import"./nprogress-uqLJ5xmn.js";import"./lodash.clonedeep-Bxvn-V0B.js";import"./lodash.isequal-BYpQg7Um.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const E={key:0,class:"mb-4 font-medium text-sm text-green-600"},B={class:"mt-4 flex items-center justify-between"},Y={__name:"VerifyEmail",props:{status:String},setup(d){const f=d,s=h({}),p=()=>{s.post(route("verification.send"))},c=g(()=>f.status==="verification-link-sent");return(a,t)=>(m(),l(y,null,[e(o(_),{title:"Email Verification"}),e(k,null,{logo:i(()=>[e(w)]),default:i(()=>[t[3]||(t[3]=r("div",{class:"mb-4 text-sm text-gray-600"}," Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another. ",-1)),c.value?(m(),l("div",E," A new verification link has been sent to the email address you provided in your profile settings. ")):v("",!0),r("form",{onSubmit:b(p,["prevent"])},[r("div",B,[e(V,{class:x({"opacity-25":o(s).processing}),disabled:o(s).processing},{default:i(()=>t[0]||(t[0]=[n(" Resend Verification Email ")])),_:1},8,["class","disabled"]),r("div",null,[e(o(u),{href:a.route("profile.show"),class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:i(()=>t[1]||(t[1]=[n(" Edit Profile")])),_:1},8,["href"]),e(o(u),{href:a.route("logout"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ms-2"},{default:i(()=>t[2]||(t[2]=[n(" Log Out ")])),_:1},8,["href"])])])],32)]),_:1})],64))}};export{Y as default};
