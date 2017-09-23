import {Component, OnInit} from '@angular/core';
import {TranslateService} from "@ngx-translate/core";
import {ServerDataService} from "./services/server-data";

@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent implements OnInit {
    constructor(
        private translate: TranslateService,
        private serverService: ServerDataService
    ) {}

    ngOnInit() {
        // this language will be used as a fallback when a translation isn't found in the current language
        this.translate.setDefaultLang('en');

        // the lang to use, if the lang isn't available, it will use the current loader to get them
        this.translate.use('en');

        this.serverService.getData().subscribe(serverData => this.translate.use(serverData.locale));
    }
}


/*
Copyright 2017 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
*/