import React, { Component } from 'react';
import { Table, Row, Col } from 'react-bootstrap';
import { withNamespaces } from 'react-i18next';
import './StatesNumbersComponent.css';



class StatesNumbersComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };

        this.fillTable = this.fillTable.bind(this);
    }

    componentDidMount() {
    }



    fillTable() {
        if (this.props.AllData) {
            debugger;
            return this.props.AllData.map((AllData, index) => {
                const { ActiveCases, Continent, Country, NewCases, NewDeaths, Population, TotalCases, TotalDeaths, TotalRecovered, Unemployment, Vaccine } = AllData //destructuring
                if (Country === 'Europe') {
                    return (
                        <tr key={index} >
                            <td>{Country}</td>
                            <td className="totalConfirmedNumbers">{TotalCases}</td>
                            <td className="activeCasesNumbers">{ActiveCases}</td>
                            <td className="newCasesNumbers">{NewCases}</td>
                            <td className="recoveredCasesNumbers">{TotalRecovered}</td>
                            <td className="newDecesedNumbers">{TotalDeaths}</td>
                            <td className="newDecesedNumbers">{NewDeaths}</td>
                            <td className="unemploymentNumbers">{Unemployment}</td>
                            <td className="vaccine">{this.props.EuropeVaccineNum}</td>
                        </tr>
                    )
                }if (Country === 'North America') {
                    return (
                        <tr key={index} >
                            <td>{Country}</td>
                            <td className="totalConfirmedNumbers">{TotalCases}</td>
                            <td className="activeCasesNumbers">{ActiveCases}</td>
                            <td className="newCasesNumbers">{NewCases}</td>
                            <td className="recoveredCasesNumbers">{TotalRecovered}</td>
                            <td className="newDecesedNumbers">{TotalDeaths}</td>
                            <td className="newDecesedNumbers">{NewDeaths}</td>
                            <td className="unemploymentNumbers">{Unemployment}</td>
                            <td className="vaccine">{this.props.nAmericaVaccineNum}</td>
                        </tr>
                    )
                }if (Country === 'South America') {
                    return (
                        <tr key={index} >
                            <td>{Country}</td>
                            <td className="totalConfirmedNumbers">{TotalCases}</td>
                            <td className="activeCasesNumbers">{ActiveCases}</td>
                            <td className="newCasesNumbers">{NewCases}</td>
                            <td className="recoveredCasesNumbers">{TotalRecovered}</td>
                            <td className="newDecesedNumbers">{TotalDeaths}</td>
                            <td className="newDecesedNumbers">{NewDeaths}</td>
                            <td className="unemploymentNumbers">{Unemployment}</td>
                            <td className="vaccine">{this.props.sAmericaVaccineNum}</td>
                        </tr>
                    )
                }if (Country === 'Asia') {
                    return (
                        <tr key={index} >
                            <td>{Country}</td>
                            <td className="totalConfirmedNumbers">{TotalCases}</td>
                            <td className="activeCasesNumbers">{ActiveCases}</td>
                            <td className="newCasesNumbers">{NewCases}</td>
                            <td className="recoveredCasesNumbers">{TotalRecovered}</td>
                            <td className="newDecesedNumbers">{TotalDeaths}</td>
                            <td className="newDecesedNumbers">{NewDeaths}</td>
                            <td className="unemploymentNumbers">{Unemployment}</td>
                            <td className="vaccine">{this.props.AsiaVaccineNum}</td>
                        </tr>
                    )
                }if (Country === 'Africa') {
                    return (
                        <tr key={index} >
                            <td>{Country}</td>
                            <td className="totalConfirmedNumbers">{TotalCases}</td>
                            <td className="activeCasesNumbers">{ActiveCases}</td>
                            <td className="newCasesNumbers">{NewCases}</td>
                            <td className="recoveredCasesNumbers">{TotalRecovered}</td>
                            <td className="newDecesedNumbers">{TotalDeaths}</td>
                            <td className="newDecesedNumbers">{NewDeaths}</td>
                            <td className="unemploymentNumbers">{Unemployment}</td>
                            <td className="vaccine">{this.props.Africa}</td>
                        </tr>
                    )
                }if (Country === 'Oceania') {
                    return (
                        <tr key={index} >
                            <td>{Country}</td>
                            <td className="totalConfirmedNumbers">{TotalCases}</td>
                            <td className="activeCasesNumbers">{ActiveCases}</td>
                            <td className="newCasesNumbers">{NewCases}</td>
                            <td className="recoveredCasesNumbers">{TotalRecovered}</td>
                            <td className="newDecesedNumbers">{TotalDeaths}</td>
                            <td className="newDecesedNumbers">{NewDeaths}</td>
                            <td className="unemploymentNumbers">{Unemployment}</td>
                            <td className="vaccine">{this.props.Oceania}</td>
                        </tr>
                    )
                }else if (Country !== 'World' && Country !== 'Total:') {

                    return (
                        <tr key={index} >
                            <td>{Country}</td>
                            <td className="totalConfirmedNumbers">{TotalCases}</td>
                            <td className="activeCasesNumbers">{ActiveCases}</td>
                            <td className="newCasesNumbers">{NewCases}</td>
                            <td className="recoveredCasesNumbers">{TotalRecovered}</td>
                            <td className="newDecesedNumbers">{TotalDeaths}</td>
                            <td className="newDecesedNumbers">{NewDeaths}</td>
                            <td className="unemploymentNumbers">{Unemployment}</td>
                            <td className="vaccine">{Vaccine}</td>
                        </tr>
                    )
                }
            })
        }
    }

    render() {
        const { t } = this.props;
        return (

            <Col className='statsuNumberCol'>
                <Row className='statsuNumberTitle'>
                    {t(this.props.Title)}
                </Row>
                <Row>
                    <span className="table-wrap">
                        <Table responsive className="tableCountrys table-hover " >
                            <thead>
                                <tr>
                                    <th>{t('Country')}</th>
                                    <th>{t('Confirmed')}</th>
                                    <th>{t('Active')}</th>
                                    <th>{t('New Cases')}</th>
                                    <th>{t('Recovered')}</th>
                                    <th>{t('Deceased')}</th>
                                    <th>{t('New Deceased')}</th>
                                    <th>{t('Unemployment')}</th>
                                    <th>{t('Vaccine')}</th>
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

export default withNamespaces()(StatesNumbersComponent);