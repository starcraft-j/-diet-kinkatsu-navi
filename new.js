window.addEventListener('load', function() {
  const urlParam = location.search.substring(1);
  if(urlParam) {
      const param = urlParam.split('&');

      let paramArray = [];

      for (i = 0; i < param.length; i++) {
          let paramItem = param[i].split('=');
          paramArray[paramItem[0]] = paramItem[1];
      }

      const set_logid = paramArray.logid;
      const set_cam = paramArray.cam;
      const set_gr_no = paramArray.gr_no;
      const set_ad_no = paramArray.ad_no;
      const set_key = paramArray.key;
      const set_select = paramArray.select;
      const set_gclid = paramArray.gclid;
      const set_yclid =paramArray.yclid;
      if(set_gclid){
          window.localStorage.setItem('add', set_gclid);
      }
      if(set_yclid){
          window.localStorage.setItem('add',  set_yclid);
      }
      if(set_logid){
          window.localStorage.setItem('logid', set_logid);
      }
      if(set_cam){
          window.localStorage.setItem('cam', set_cam);
      }
      if(set_gr_no){
          window.localStorage.setItem('gr_no', set_gr_no);
      }
      if(set_ad_no){
          window.localStorage.setItem('ad_no', set_ad_no);
      }
      if(set_key){
          window.localStorage.setItem('key', set_key);
      }
      if(set_select){
          window.localStorage.setItem('select', set_select);
      }
  }
  const logid = localStorage.getItem('logid');
  const cam = localStorage.getItem('cam');
  const gr_no = localStorage.getItem('gr_no');
  const ad_no = localStorage.getItem('ad_no');
  const key = localStorage.getItem('key');
  const select = localStorage.getItem('select');
  const add = localStorage.getItem('add');

  const newParams = logid?'&logid='+logid:'' + 
                    cam?'&cam='+cam:'' + 
                    gr_no?'&gr_no='+gr_no:'' + 
                    ad_no?'&ad_no='+ad_no:'' + 
                    key?'&key='+key:'' + 
                    select?'&select='+select:'';

  const links = document.getElementsByTagName('a');
  for(let i=0;i<links.length;i++){
      if(links[i].hasAttribute('target')){
          let linkUrl = links[i].getAttribute('href');
          let newLinkUrl = null;
          if(linkUrl.match(/\?/)){
              newLinkUrl = linkUrl + '&' + newParams;
          }else{
              newLinkUrl = linkUrl + '?' + newParams;
          }
          console.log(newLinkUrl);
      }else{
          return false;
      }
  }
  const uri = location.href;
  console.log(uri);
  if ( uri.match(/net\/links/) ) {
      console.log("refresh page");
      const metas = document.getElementsByTagName('meta');
      let newTargetLink = null;
      for(let i=0;i<metas.length;i++){
          if(metas[i].hasAttribute('http-equiv') && metas[i].getAttribute('http-equiv')==='refresh'){
              let targetLink = metas[i].getAttribute('content');
              console.log("old:",targetLink);
                if ( targetLink.match(/h.accesstrade.net/) ) {
                  metas[i].removeAttribute('content');
                  metas[i].setAttribute('content',targetLink+"&add="+add);
                }else
                if( targetLink.match(/t.82comb.net/) ){
                  metas[i].removeAttribute('content');
                  metas[i].setAttribute('content',targetLink+"&gclid="+add);
                }else
                if( targetLink.match(/click.j-a-net.jp/) ){
                  metas[i].removeAttribute('content');
                  metas[i].setAttribute('content',targetLink+add);
                }else
                if( targetLink.match(/ad2.trafficgate.net/) ){
                  metas[i].removeAttribute('content');
                  metas[i].setAttribute('content',targetLink+"0/STCR"+add+"/");
                }else
                if( targetLink.match(/csolution.jp/) ){
                  metas[i].removeAttribute('content');
                  metas[i].setAttribute('content',targetLink+"?mp="+add);
                }else
                if( targetLink.match(/ac-secure.sukkiri-life.com/) ){
                  metas[i].removeAttribute('content');
                  metas[i].setAttribute('content',targetLink+"&_ac_tag="+add);
                }else
                if( targetLink.match(/www.campaign-a.com/) ){
                  metas[i].removeAttribute('content');
                  metas[i].setAttribute('content',targetLink+"&add="+add+"&pbid="+localStorage.getItem('reroots_clid'));
                }else{
                  metas[i].removeAttribute('content');
                  metas[i].setAttribute('content',targetLink+"&add="+add);
                }
          }
      }
      console.log("new:",newTargetLink);
  }else{

      console.log("no refresh page");

  }
});