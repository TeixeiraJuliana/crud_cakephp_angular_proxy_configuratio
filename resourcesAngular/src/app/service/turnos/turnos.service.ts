import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders  } from "@angular/common/http";
import { environment } from 'src/environments/environment';
import { Turno } from './turno';

@Injectable({
  providedIn: 'root'
})
export class TurnosService {

  private headers: HttpHeaders;
  private data: []
  
  constructor( private http: HttpClient) { 
    this.headers = new HttpHeaders().set('Content-Type', 'application/json');

  }

    
  listTurnos()
  {
    return this.http.get<any>(environment.BASE_URL + '/turnus/list-turno');
  }
}
