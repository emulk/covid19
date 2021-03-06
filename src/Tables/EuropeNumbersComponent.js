import React, { Component } from 'react';
import { Table, Row, Col } from 'react-bootstrap';
import { withNamespaces } from 'react-i18next';
import './EuropeNumbersComponent.css';



class EuropeNumbersComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };

        this.fillTable = this.fillTable.bind(this);
    }

    fillTable() {
        if (this.props.AllData) {
            return this.props.AllData.map((AllData, index) => {
                const { ActiveCases, Country, NewCases, NewDeaths, Population, TotalCases, TotalDeaths, TotalRecovered, TotalTests, Unemployment, Vaccine, VaccineName } = AllData //destructuring
                if ( Country == 'Total:' || Country == 'Europe' || Country == 'North America' || Country == 'Asia'|| Country == 'Africa'|| Country == 'Oceania') {
                return (
                    <tr key={index} >
                        <td>{Country}</td>
                        <td className="population">{Population}</td>
                        <td className="totalConfirmedNumbers">{TotalCases}</td>
                        <td className="activeCasesNumbers">{ActiveCases}</td>
                        <td className="newCasesNumbers">{NewCases}</td>
                        <td className="recoveredCasesNumbers">{TotalRecovered}</td>
                        <td className="newDecesedNumbers">{TotalDeaths}</td>
                        <td className="newDecesedNumbers">{NewDeaths}</td>
                        <td className="testCasesNumbers">{TotalTests}</td>
                        <td className="unemploymentNumbers">{Unemployment}</td>
                        <td className="vaccine">{this.props.VaccineNum}</td>
                        <td className="vaccineName">{VaccineName}</td>
                    </tr>
                )

                }else if ( Country == 'South America' ) {
                    return (
                        <tr key={index} >
                            <td>{Country}</td>
                            <td className="population">{Population}</td>
                            <td className="totalConfirmedNumbers">{TotalCases}</td>
                            <td className="activeCasesNumbers">{ActiveCases}</td>
                            <td className="newCasesNumbers">{NewCases}</td>
                            <td className="recoveredCasesNumbers">{TotalRecovered}</td>
                            <td className="newDecesedNumbers">{TotalDeaths}</td>
                            <td className="newDecesedNumbers">{NewDeaths}</td>
                            <td className="testCasesNumbers">{TotalTests}</td>
                            <td className="unemploymentNumbers">{Unemployment}</td>
                            <td className="vaccine">{this.props.VaccineNumSouth}</td>
                            <td className="vaccineName">{VaccineName}</td>
                        </tr>
                    )
    
                    }
                
                else{
                    return (
                        <tr key={index} >
                            <td>{Country}</td>
                            <td className="population">{Population}</td>
                            <td className="totalConfirmedNumbers">{TotalCases}</td>
                            <td className="activeCasesNumbers">{ActiveCases}</td>
                            <td className="newCasesNumbers">{NewCases}</td>
                            <td className="recoveredCasesNumbers">{TotalRecovered}</td>
                            <td className="newDecesedNumbers">{TotalDeaths}</td>
                            <td className="newDecesedNumbers">{NewDeaths}</td>
                            <td className="testCasesNumbers">{TotalTests}</td>
                            <td className="unemploymentNumbers">{Unemployment}</td>
                            <td className="vaccine">{Vaccine}</td>
                            <td className="vaccineName">{VaccineName}</td>
                        </tr>
                    )
                }

            })
            
        }
    }



    render() {
        const { t } = this.props;
        return (
            <Col className="tableEuropeanCol">
                <Row className="tableEuropeanTitle">
                    {t(this.props.Title)}
                </Row>
                <Row>
                    <span className="europTable-wrap">
                        <Table responsive className="europeTableCountrys table-hover " >
                            <thead>
                                <tr>
                                    <th>{t('Country')}</th>
                                    <th>{t('Population')}</th>
                                    <th>{t('Confirmed')}</th>
                                    <th>{t('Active')}</th>
                                    <th>{t('New Cases')}</th>
                                    <th>{t('Recovered')}</th>
                                    <th>{t('Deceased')}</th>
                                    <th>{t('New Deceased')}</th>
                                    <th>{t('Tests')}</th>
                                    <th>{t('Unemployment')}</th>
                                    <th>{t('Vaccine')}</th>
                                    <th>{t('Vaccine Name')}</th>
                                </tr>
                            </thead>
                            <tbody>
                                {this.fillTable()}
                            </tbody>
                        </Table>
                    </span>
                </Row>
            </Col>
        );
    }
}

export default withNamespaces()(EuropeNumbersComponent);