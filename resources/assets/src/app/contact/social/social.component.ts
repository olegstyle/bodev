import {Component, OnInit} from '@angular/core';
import {ServerDataService} from "../../services/server-data";
import {ServerData} from "../../model/server-data";

@Component({
    selector: 'contact-social',
    templateUrl: 'social.component.html',
    styleUrls: ['social.component.css'],
})
export class ContactSocialComponent implements OnInit {
    constructor(
        private serverDataService: ServerDataService
    ){}
    serverData: ServerData = new ServerData();

    loadData() {
        this.serverDataService.getData().subscribe(serverData => this.serverData = serverData);
    }

    ngOnInit() {
        this.loadData();
    }
}
