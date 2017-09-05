import {Component, OnInit} from '@angular/core';
import {ServerDataService} from "../services/server-data";
import {ServerData} from "../model/server-data";

@Component({
    selector: 'footer',
    templateUrl: 'footer.component.html',
    styleUrls: ['footer.component.css'],
})
export class FooterComponent implements OnInit {
    private dateStart = 2017;
    private dateNow = new Date().getFullYear();
    date = '2017';
    constructor(
        private serverDataService: ServerDataService
    ){}

    serverData: ServerData = new ServerData();

    loadData() {
        this.serverDataService.getData().subscribe(serverData => this.serverData = serverData);
    }

    ngOnInit() {
        this.loadData();
        this.date = this.dateStart + (this.dateNow > this.dateStart ? ' - ' + this.dateNow: '');
    }
}
