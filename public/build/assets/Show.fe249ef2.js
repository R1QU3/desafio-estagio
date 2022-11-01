import{_ as c}from"./AppLayout.2ea4459f.js";import p from"./DeleteUserForm.2de175e3.js";import l from"./LogoutOtherBrowserSessionsForm.7710def4.js";import{S as s}from"./SectionBorder.9726a16b.js";import f from"./TwoFactorAuthenticationForm.e6a88c7e.js";import u from"./UpdatePasswordForm.faa1ce9d.js";import _ from"./UpdateProfileInformationForm.a5b0bfb3.js";import{o,c as d,w as n,a as i,e as r,b as t,f as a,F as h}from"./app.e0bedf6d.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./DialogModal.2cadc939.js";import"./SectionTitle.59497e2b.js";import"./DangerButton.ad6b26ed.js";import"./TextInput.97ea2667.js";import"./SecondaryButton.bc6bf576.js";import"./ActionMessage.06c5c1fc.js";import"./PrimaryButton.0c6a4dbe.js";import"./InputLabel.8bca48d3.js";import"./FormSection.a4c9d521.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},w={key:0},k={key:1},y={key:2},z={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(e,x)=>(o(),d(c,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[i("div",null,[i("div",$,[e.$page.props.jetstream.canUpdateProfileInformation?(o(),r("div",w,[t(_,{user:e.$page.props.user},null,8,["user"]),t(s)])):a("",!0),e.$page.props.jetstream.canUpdatePassword?(o(),r("div",k,[t(u,{class:"mt-10 sm:mt-0"}),t(s)])):a("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(o(),r("div",y,[t(f,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),t(l,{sessions:m.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),e.$page.props.jetstream.hasAccountDeletionFeatures?(o(),r(h,{key:3},[t(s),t(p,{class:"mt-10 sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{z as default};