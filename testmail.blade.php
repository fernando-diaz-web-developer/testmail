@extends('tablecontainer')
@section('content')
<tr>
         <td style="font-size:0"></td>
         <td align="center" style="width:680px;background-color:#e9eced" valign="top">
         <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
            <tbody>
               <tr>
                  <td align="center" class="m_-8731632465767469504m_553835892099126566mbl_rm" style="padding-bottom:15px;background-color:#e9eced;display:none">
                  <table border="0" cellpadding="0" cellspacing="0" style="width:95%">
                     <tbody>
                        <tr>
                           <td style="padding:10px 0 5px 0;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#535353;text-align:center">In case you wanted to know.  | <a href="" style="font-family:Helvetica,Arial,sans-serif;color:#535353;text-decoration:none" target="_blank" data-saferedirecturl="">View in browser</a></td>
                        </tr>
                     </tbody>
                  </table>
                  </td>
               </tr>
               <tr>
                  <td>
@include('mailparts.header-menu',['menu' => $menu ])
                  </td>
               </tr>
               <tr>
                  <td>
@include('mailparts.header-cta',[
'title' => $title,
'city' => $city,
'month' => $month ])
                  </td>
               </tr>
               <tr>
                  <td>
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:680px">
                     <tbody>
                        <tr>
                           <td align="center" bgcolor="#edeeee" style="padding:0px 20px 0px 20px;background-color:#fff">
                           <table align="center" border="0" cellpadding="0" cellspacing="0" class="m_-8731632465767469504m_553835892099126566w90" style="width:92%">
                              <tbody>
                                 <tr>
                                    <td style="padding:40px 0 20px 0;font-family:Helvetica,Arial,sans-serif;font-size:30px;color:#2f3033;line-height:34px;text-align:center;font-weight:600"><a href="" style="color:#2f3033;text-decoration:none" target="_blank" data-saferedirecturl="">The most requested service right&nbsp;now&nbsp;is…</a></td>
                                 </tr>
                              </tbody>
                           </table>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  </td>
               </tr>
               <tr>
                  <td>
@include('mailparts.most-demanded',$mostdemanded[0])
                  </td>
               </tr>
               <tr>
                  <td>
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:680px">
                     <tbody>
                        <tr>
                           <td align="center" bgcolor="#edeeee" style="padding:0px 20px 0px 20px;background-color:#fff">
                           <table align="center" border="0" cellpadding="0" cellspacing="0" class="m_-8731632465767469504m_553835892099126566w90" style="width:92%;border-top:2px solid #f4f4f4">
                              <tbody>
                                 <tr>
                                    <td style="padding:40px 0 20px 0;font-family:Helvetica,Arial,sans-serif;font-size:30px;color:#2f3033;line-height:34px;text-align:center;font-weight:600"><a href="" style="color:#2f3033;text-decoration:none" target="_blank" data-saferedirecturl="">People are also&nbsp;hiring:</a></td>
                                 </tr>
                              </tbody>
                           </table>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  </td>
               </tr>
@foreach([
         $mostdemanded[1],
         $mostdemanded[2],
         $mostdemanded[3]
      ] as $k => $v)
@if($loop->index % 2 == 0)
   @include('mailparts.also-hiring-left-image',$v)
@else
   @include('mailparts.also-hiring-right-image',$v)
@endif 
@endforeach
               <tr>
                  <td>
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:680px">
                     <tbody>
                        <tr>
                           <td align="center" style="padding:21px 0 20px 0;background-color:#fff">
                           <table border="0" cellpadding="0" cellspacing="0" class="m_-8731632465767469504m_553835892099126566w100" style="width:100%;background-color:#f0f1f9">
                              <tbody>
                                 <tr>
                                    <td align="center" style="font-size:0;vertical-align:top">
                                    <div class="m_-8731632465767469504m_553835892099126566mw100" style="display:inline-block;width:100%;max-width:340px;vertical-align:bottom">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:95%">
                                       <tbody>
                                          <tr>
                                             <td class="m_-8731632465767469504m_553835892099126566mbl_cta" style="direction:ltr;padding:35px 0 0 0;line-height:18px;text-align:center"><a class="m_-8731632465767469504m_553835892099126566mbl_cta" href="" style="font-family:Helvetica,Arial,sans-serif;font-size:14px;line-height:25px;font-weight:600;color:#152e75;text-decoration:none" target="_blank" data-saferedirecturl="">{{$city}}, {{$state}}</a></td>
                                          </tr>
                                          <tr>
                                             <td class="m_-8731632465767469504m_553835892099126566mbl_ban" style="direction:ltr;padding:12px 0 0 0;line-height:36px;text-align:center"><a class="m_-8731632465767469504m_553835892099126566mbl_ban" href="" style="font-family:Helvetica,Arial,sans-serif;font-size:34px;line-height:34px;font-weight:600;color:#152e75;text-decoration:none" target="_blank" data-saferedirecturl=""><span style="color:#009fd9!important">{{$amount}}</span> projects</a></td>
                                          </tr>
                                          <tr>
                                             <td style="direction:ltr;padding:10px 0 40px 0;line-height:18px;text-align:center"><a href="" style="font-family:Helvetica,Arial,sans-serif;font-size:18px;line-height:22px;font-weight:600;color:#152e75;text-decoration:none" target="_blank" data-saferedirecturl="">and counting!</a></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    </div>
                                    

                                    <div class="m_-8731632465767469504m_553835892099126566mw100" style="display:inline-block;width:100%;max-width:340px;vertical-align:top">
                                    <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                                       <tbody>
                                          <tr>
                                             <td align="center"><a href="" style="text-decoration:none" target="_blank" data-saferedirecturl=""><img alt="{{$amount}} projects in {{$city}}, {{$state}} and counting!" border="0" src="https://ci3.googleusercontent.com/proxy/7FSnC6YEXcNDB9u7VgDO8UU_Ooh2J3rkCl1uDzvN_O9kwgCswf4ehQXZF4ig1T98brIXicn40uexmgUmMZM_fxeCy7OoKPGbOM5QYFuSkbHHON0ZBaeLkdI80O84V4K8e5cD61LT2GT5HS27T3WUey-J_VW_d__ao5opZpeMnp4E72a2gLMKqDZ0FwBUDrUB0J4cN9kLPNJ0tou4u1AHYNN-9dEAguUgfg=s0-d-e1-ft#https://static.cdn.responsys.net/i2/responsysimages/thumbtk/contentlibrary/customer_marketing/seasonal/2018/05_may/2018_0515/img/totalProjects.jpg" style="display:block;border:0;outline:0;padding:0;width:100%;height:auto;font-family:Helvetica,Arial,sans-serif;font-size:14px;color:#2f3033" title="{{$amount}} projects in {{$city}}, {{$state}} and counting!" width="320" class="CToWUd"></a></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    </div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  </td>
                  
               </tr>
               <tr>
                  <td>
                  <table border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:680px;background-color:#fff">
                     <tbody>
                        <tr>
                           <td align="center" style="padding:20px 0 50px 0;background-color:#fff">
                           <table border="0" cellpadding="0" cellspacing="0" style="width:85%;background-color:#f0e8de">
                              <tbody>
                                 <tr>
                                    <td style="padding:40px 10px 0px 10px;font-family:Helvetica,Arial,sans-serif;font-size:14px;color:#2f3033;font-weight:700!important;line-height:20px;letter-spacing:1px;text-align:center"><a href="" style="color:#2f3033;text-decoration:none" target="_blank" data-saferedirecturl="">OUTDOOR LANDSCAPING </a></td>
                                 </tr>
                                 <tr>
                                    <td style="padding:10px 10px 0px 10px;font-family:Helvetica,Arial,sans-serif;font-size:22px;color:#2f3033;font-weight:300!important;line-height:28px;text-align:center"><a href="" style="color:#2f3033;text-decoration:none" target="_blank" data-saferedirecturl="">Low-maintenance summer yard, here we come. </a></td>
                                 </tr>
                                 <tr>
                                    <td align="center" style="padding:20px 0 0 0">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:125px">
                                       <tbody>
                                          <tr>
                                             <td align="center" height="40" style="width:125px;height:40px;background-color:#009fd9;border-radius:5px;direction:ltr" width="160"><a href="" style="display:inline-block;font-family:Helvetica,Arial,sans-serif;font-weight:bold;font-size:14px;color:#ffffff;text-decoration:none;padding:10px 9px" target="_blank" data-saferedirecturl="">Get started</a></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td align="center"><a href="" style="text-decoration:none" target="_blank" data-saferedirecturl=""><img alt="Outdoor Landscaping" border="0" src="https://ci4.googleusercontent.com/proxy/vSrjP1S_4E8wbVhnS9o6S64625qCCXel6-XZIONSLvPJB9tCsIPhJAAV2SSgCUOxZDoWML6Hqe_NN9OECjDzFEw-2HmuIsV-ERAZTJlbl7lPNSIbTjQNHaOOKLU_fSRGiPihz9ztFwaDftppgkqv9I1xf_-SgPAc6NHdsTzBGnU5QLsi-XZV4IO6erC4tAWfTtvywfI6ct6NRL6H3GbhpmA=s0-d-e1-ft#https://static.cdn.responsys.net/i2/responsysimages/thumbtk/contentlibrary/customer_marketing/seasonal/2018/05_may/2018_0515/img/grass.png" style="display:block;border:0;outline:0;padding:0;width:100%;height:auto;font-family:Helvetica,Arial,sans-serif;font-size:14px;color:#2f3033" title="Outdoor Landscaping" width="580" class="CToWUd"> </a></td>
                                 </tr>
                              </tbody>
                           </table>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  </td>
               </tr>
               <tr>
               </tr>
               <tr>
                  <td>
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:680px">
                     <tbody>
                        <tr>
                           <td align="center" bgcolor="#edeeee" style="padding:0px 20px 0px 20px;background-color:#fff">
                           <table align="center" border="0" cellpadding="0" cellspacing="0" class="m_-8731632465767469504m_553835892099126566w90" style="width:92%">
                              <tbody>
                                 <tr>
                                    <td style="padding:40px 0 0 0;font-family:Helvetica,Arial,sans-serif;font-size:30px;color:#2f3033;line-height:34px;text-align:center;font-weight:600"><a href="" style="color:#2f3033;text-decoration:none" target="_blank" data-saferedirecturl="">More local picks</a>.</td>
                                 </tr>
                              </tbody>
                           </table>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  </td>
               </tr>
@include('mailparts.more-container',[$random[0],$random[1]])
@include('mailparts.more-container',[$random[2],$random[3]])
@include('mailparts.featured',$featured)
               
               <tr>
                  <td align="center">
@include('mailparts.footer',['totalservices'=>$totalservices,'searchurl'=>$searchurl])
                  </td>
               </tr>
            </tbody>
         </table>
         </td>
         <td style="font-size:0"></td>
      </tr>
   </tbody>
</table>

</div>
<img height="1" src="https://ci3.googleusercontent.com/proxy/Dq8TK2myuqHGCsblIC0zSbrm0FCfbUvjkfkSCeh538Izn_FV9VmA4N8c2OtY-GfbyjRlm-zYytAvn8_rMhKJBgzSLpfrvyK2CDhfU_EMyGUJRQo-Jc0ksKu5aMLgG4MyLBSBbayWUy1h2mH90AJvrHw-TxHOYYOaep-4ib46EBuSUHuuAIvhIXw2X0ND=s0-d-e1-ft#https://pixel.monitor1.returnpath.net/pixel.gif?r=4bf40449113f0d699cb9859e17eb10c81c49b0ec&amp;c=thumbtk.9044022&amp;s=23919251" width="1" class="CToWUd"> <img height="1" src="https://ci5.googleusercontent.com/proxy/1ep_GXsz3DKbuSvUObIOXe4r5vwuTbaH727p-Gbh5E2AO4Ij2F_Jp-2BFFjHN5oorwT9LoiTBGwHFB4-xqBCZhLJx0uJW4qU_GMmfjl3YjeQCEOIfZuY3B9uPQmT2G_l-N3L9eXAUOByF5xCUcqIT5SZb6yPZDI1BBe7p097JPRfDNEIO-Ju-g=s0-d-e1-ft#https://pixel.app.returnpath.net/pixel.gif?r=4bf40449113f0d699cb9859e17eb10c81c49b0ec&amp;c=thumbtk.9044022&amp;s=23919251" width="1" class="CToWUd"><table cellpadding="0" cellspacing="0" style="border:0px;padding:0px;margin:0px;display:none;float:left">
<tbody><tr>
<td height="1" style="font-size:1px;line-height:1px;padding:0px">
<br><img src="https://ci3.googleusercontent.com/proxy/4pCFML2OXLkhyt6i8vPUjMJNV8LxSPg2sxitpwDVlpKVlZNplqHrgKAUG0H5Jv12yE5aaklfs6JSAXwWh6F-dw06Iww2rDE_R7j3X8UXMsWBQciMO8Tx-dUxu6_YqlubZiDDb2bPmP9PTAbTa9A_LEhpQb-43dtBI-OuXMl5Sc9v9NxOl-4Y8xdvgIaoDMtJvprLZny4LrtLQ1L4Vp5hxsEsoWeTMtlrFiCbDLNKYNX1-AONvrZwiZhk_wPHOMUibDIvl-00YUKVpNvkxZYKtmIbVOo_trpbNfNgWEBHxkS0DSiQsgUe7wjCmiFY4YsAxdyXwmJwV14qt1QI6cxsGfGbciY=s0-d-e1-ft#https://go.thumbtack.com/pub/as?_ri_=X0Gzc2X%3DYQpglLjHJlTQGzbbho75lYzbKpunmhq5fyzaD1KFaoNkAnO0BsbfrOcSvw1LzafMYUyN7D9qcIMWLCGiPfVXHkMX%3Dw&amp;_ei_=EolaGGF4SNMvxFF7KucKuWOBSPfr9wDXWlhuBKbJDOg990Y1uLLl8kb_SUzxrXTcJAY3K5Tj6qUb2Fwj-ybGHGQdD10." class="CToWUd">
</td>
</tr>
@endsection