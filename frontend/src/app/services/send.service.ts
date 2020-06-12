import { Injectable, Input } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
//import { Email } from '../../models/emailcall';
import { Observable } from 'rxjs';
import { global } from './global';

@Injectable({
  providedIn: 'root'
})
export class SendService {
  public url: string;


  constructor(
    public http: HttpClient
  )
  {
      this.url = global.url;
  }




  send(email): Observable<any>
  {
    let json = JSON.stringify(email);
    let params = 'json='+json;
    console.log(params);

    let headers = new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded');
    return this.http.post(this.url, params, {headers: headers, responseType:'text'});

  }
}
