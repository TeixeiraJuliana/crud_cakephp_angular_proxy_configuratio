import { Component, OnInit } from '@angular/core';
import { TurnosService } from '../service/turnos/turnos.service';


import { Injectable } from '@angular/core';
import { Turno } from '../service/turnos/turno';

@Component({
  selector: 'app-turnos',
  templateUrl: './turnos.component.html',
  styleUrls: ['./turnos.component.css']
})
export class TurnosComponent implements OnInit {

  turnos: any[];
  
  constructor( private service: TurnosService) { }

  ngOnInit() {
    this.service.listTurnos().subscribe(
      (operacao) => {
        this.turnos = operacao; 
        console.log(this.turnos);
      }
    )
    
  }
  trataResposta(resposta: any[]) {
    this.turnos = resposta;
    console.log(this.turnos)
  }


}