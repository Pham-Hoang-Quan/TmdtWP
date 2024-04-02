import{U as i}from"./AnimatedNumber.c7763fcb.js";import{n as a}from"./_plugin-vue2_normalizer.d86aa1f3.js";const o={props:{targetLineCount:{default:1,type:Number},unit:{default:"px",type:String},min:{default:12,type:Number},max:{default:36,type:Number},constrainToElement:{type:[Boolean,Element],default(){return!1}},elementPadding:{type:Number,default(){return 0}}},data(){return{observer:null}},methods:{calculate(){const n=this.$el,t=this.unit==="px"?1:.05;let e=this.max;if(n.style.display="inline-block",n.style.lineHeight="1px",n.style.fontSize=e+this.unit,this.constrainToElement)for(;n.offsetWidth>this.constrainToElement.offsetWidth-this.elementPadding&&e>this.min;)e-=t,n.style.fontSize=e+this.unit;else for(;n.offsetHeight>this.targetLineCount&&e>this.min;)e-=t,n.style.fontSize=e+this.unit;this.$emit("resize",{size:e,unit:this.unit}),n.style.display=null,n.style.lineHeight=null}},mounted(){this.calculate(),"MutationObserver"in window&&this.observer===null&&(this.observer=new MutationObserver(this.calculate),this.observer.observe(this.$el,{subtree:!0,characterData:!0})),window.addEventListener("resize",this.calculate)},beforeDestroy:function(){this.observer.disconnect(),window.removeEventListener("resize",this.calculate)}};var l=function(){var t=this,e=t._self._c;return e("span",[t._t("default")],2)},u=[],c=a(o,l,u,!1,null,null,null,null);const d=c.exports;const _={components:{UtilAnimatedNumber:i,UtilFitText:d},props:{parts:{type:Array,required:!0},label:{type:String,required:!0},total:{type:Number,required:!0},animatedNumber:{type:Boolean,default(){return!0}}}};var m=function(){var t=this,e=t._self._c;return e("div",{staticClass:"aioseo-donut-chart"},[t.total===0?e("svg",{attrs:{viewBox:"0 0 33.83098862 33.83098862",xmlns:"http://www.w3.org/2000/svg"}},[e("circle",{staticClass:"aioseo-donut-chart-score__circle",attrs:{stroke:"#e8e8eb","stroke-dasharray":"100","stroke-linecap":"round","stroke-width":2,fill:"none",cx:"16.91549431",cy:"16.91549431",r:"15.91549431"}})]):t._e(),0<t.total?e("svg",{attrs:{viewBox:"0 0 33.83098862 33.83098862",xmlns:"http://www.w3.org/2000/svg"}},[t._l(t.parts,function(r,s){return[Math.round(r.ratio)&&s!==0?e("circle",{key:s+"_border",staticClass:"aioseo-donut-chart-score__circle",attrs:{stroke:"#FFFFFF","stroke-dasharray":`${Math.round(r.ratio)} ${parseFloat(99-Math.round(r.ratio))}`,"stroke-linecap":"round","stroke-width":2.5,fill:"none",cx:"16.91549431",cy:"16.91549431",r:"15.91549431"}}):t._e(),Math.round(r.ratio)?e("circle",{key:s+"_stroke",staticClass:"aioseo-donut-chart-score__circle",attrs:{stroke:r.color,"stroke-dasharray":`${Math.round(r.ratio)===100?100:Math.round(r.ratio)-1} 100`,"stroke-linecap":"round","stroke-width":2,fill:"none",cx:"16.91549431",cy:"16.91549431",r:"15.91549431"}}):t._e()]})],2):t._e(),e("div",{staticClass:"total-amount-wrapper"},[e("div",{staticClass:"total-amount"},[e("div",{staticClass:"total"},[e("util-fit-text",{attrs:{max:40,"constrain-to-element":t.$el,"element-padding":30}},[t.animatedNumber?e("util-animated-number",{attrs:{number:parseInt(t.total)}}):e("div",{domProps:{innerHTML:t._s(parseInt(t.total))}})],1)],1),e("div",{staticClass:"label"},[t._v(t._s(t.label))])])])])},p=[],h=a(_,m,p,!1,null,null,null,null);const f=h.exports;const v={components:{CoreDonutChart:f,UtilAnimatedNumber:i},props:{parts:{type:Array,required:!0},total:{type:Number,required:!0},label:{type:String,required:!0},link:{type:String,required:!1},animatedNumber:{type:Boolean,default(){return!0}}},computed:{sortedParts(){const n=this.parts.map(t=>t);return n.forEach(function(t,e){t.last&&(n.push(n[e]),n.splice(e,1))}),n}}};var y=function(){var t=this,e=t._self._c;return e("div",{staticClass:"aioseo-donut-chart-with-legend"},[e("div",{staticClass:"chart-left"},[e("core-donut-chart",{attrs:{parts:t.parts,total:t.total,label:t.label,animatedNumber:t.animatedNumber}})],1),e("div",{staticClass:"chart-right"},[t._l(t.sortedParts,function(r,s){return e("div",{key:s,staticClass:"legend"},[e("div",{staticClass:"legend-bullet",style:`background-color: ${r.color}`}),e("span",{staticClass:"legend-amount"},[t.animatedNumber?e("util-animated-number",{attrs:{number:parseInt(r.count)}}):e("div",{domProps:{innerHTML:t._s(parseInt(r.count))}})],1),e(r.link?"a":"span",{tag:"component",staticClass:"legend-label",class:{"is-link":r.link},attrs:{href:r.link||null}},[t._v(" "+t._s(r.name)+" ")])],1)}),t.link&&t.total>0?e("div",{staticClass:"chart-more"},[e("span",{domProps:{innerHTML:t._s(t.link)}})]):t._e()],2)])},b=[],g=a(v,y,b,!1,null,null,null,null);const w=g.exports;export{w as C};
