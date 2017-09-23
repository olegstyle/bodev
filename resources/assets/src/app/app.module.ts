///<reference path="../../../../node_modules/@angular/material/typings/chips/index.d.ts"/>
import { NgModule }       from '@angular/core';
import { BrowserModule }  from '@angular/platform-browser';
import { FormsModule, ReactiveFormsModule }    from '@angular/forms';
import {
    MD_PLACEHOLDER_GLOBAL_OPTIONS,
    MdButtonModule,
    MdButtonToggleModule,
    MdCardModule,
    MdCheckboxModule,
    MdDatepickerModule,
    MdDialogModule,
    MdExpansionModule,
    MdGridListModule,
    MdIconModule,
    MdInputModule,
    MdToolbarModule,
    MdTooltipModule,
    MdSnackBarModule
} from '@angular/material';
import {HTTP_INTERCEPTORS, HttpClient, HttpClientModule} from '@angular/common/http';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { CookieService } from 'ngx-cookie-service';

import { AppComponent }         from './app.component';
import { FooterComponent } from './footer/footer.component';
import { ContactComponent } from './contact/contact.component';
import { ContactSocialComponent } from './contact/social/social.component';
import { ContactFormComponent } from './contact/form/form.component';
import { HeaderComponent } from "./header/header.component";
import { ServerDataService } from "./services/server-data";
import { MyRecaptchaComponent } from "./utils/compnents/recaptcha/myrecaptcha.component";
import {ContactFormService} from "./services/contact-form.service";
import {TokenInterceptor} from "./utils/token.interceptor";
import {Ng2PageScrollModule} from "ng2-page-scroll";
import {TranslateModule, TranslateLoader} from '@ngx-translate/core';
import {TranslateHttpLoader} from '@ngx-translate/http-loader';

// AoT requires an exported function for factories
export function HttpLoaderFactory(http: HttpClient) {
    return new TranslateHttpLoader(http, './assets/i18n/', '.json');
}

@NgModule({
    imports: [
        BrowserModule,
        FormsModule,
        BrowserAnimationsModule,
        TranslateModule.forRoot({
            loader: {
                provide: TranslateLoader,
                useFactory: HttpLoaderFactory,
                deps: [HttpClient]
            }
        }),
        HttpClientModule,
        ReactiveFormsModule,
        // form
        MdButtonModule,
        MdButtonToggleModule,
        MdCardModule,
        MdCheckboxModule,
        MdDatepickerModule,
        MdDialogModule,
        MdExpansionModule,
        MdGridListModule,
        MdIconModule,
        MdInputModule,
        MdToolbarModule,
        MdTooltipModule,
        MdSnackBarModule,
        Ng2PageScrollModule
    ],
    declarations: [
        AppComponent,
        FooterComponent,
        ContactComponent,
        ContactSocialComponent,
        ContactFormComponent,
        HeaderComponent,
        MyRecaptchaComponent
    ],
    providers: [
        ServerDataService,
        ContactFormService,
        CookieService,
        { provide: MD_PLACEHOLDER_GLOBAL_OPTIONS, useValue: { float: 'always' } },
        { provide: HTTP_INTERCEPTORS, useClass: TokenInterceptor, multi: true }
    ],
    bootstrap: [ AppComponent ]
})
export class AppModule { }

/*
Copyright 2017 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
*/