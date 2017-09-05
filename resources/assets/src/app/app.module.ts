import { NgModule }       from '@angular/core';
import { BrowserModule }  from '@angular/platform-browser';
import { FormsModule }    from '@angular/forms';
//import { MdFormFieldModule } from '@angular/material';
import { HttpClientModule, HttpClientXsrfModule } from '@angular/common/http';

import { AppComponent }         from './app.component';
import { FooterComponent } from './footer/footer.component';
import { ContactComponent } from './contact/contact.component';
import { ContactSocialComponent } from './contact/social/social.component';
import { ContactFormComponent } from './contact/form/form.component';
import { HeaderComponent } from "./header/header.component";
import {ServerDataService} from "./services/server-data";

@NgModule({
    imports: [
        BrowserModule,
        FormsModule,
        //MdFormFieldModule,
        HttpClientModule,
        HttpClientXsrfModule.withOptions({
            cookieName: 'XSRF-TOKEN',
            headerName: 'X-CSRF-TOKEN'
        })
    ],
    declarations: [
        AppComponent,
        FooterComponent,
        ContactComponent,
        ContactSocialComponent,
        ContactFormComponent,
        HeaderComponent
    ],
    providers: [ ServerDataService ],
    bootstrap: [ AppComponent ]
})
export class AppModule { }

/*
Copyright 2017 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
*/